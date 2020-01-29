<template>
  <div class="small">
      <p></p>
    <line-chart :chart-data="datacollection"></line-chart>
  </div>
</template>

<script>
  import axios from 'axios';
  import LineChart from '../LineChart.js';

  export default {
    components: {
      LineChart
    },
    data () {
      return {
        datacollection: null,
        dateArray: [],
        valueArray: []
      }
    },

    async mounted () {
        await this.getData();
        this.fillData()
    },
    methods: {
      fillData () {
        this.datacollection = {
          labels: this.dateArray,
          datasets: [
            {
              label: 'Total Sales',
              backgroundColor: '#f87979',
              data: this.valueArray
            }
          ]
        }
      },
        getData() {
            fetch('api/orders/totalsales')
            .then(res => res.json ())
            .then(res => {
                var dataArray = new Array();
                for(let i=0; i< res.length; i++){
                    dataArray[res[i].date_ordered] = res[i].order_total;
                }
                var dateData = Object.keys(dataArray)
                var salesData = Object.values(dataArray)
                this.dateArray = dateData;
                this.valueArray = salesData;

                this.fillData();
                })
            },
      }
    }
</script>

<style>
  .small {
    max-width: 600px;
    margin:  150px auto;
  }
</style>
