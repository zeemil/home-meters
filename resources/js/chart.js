import Chart from 'chart.js/auto'

(async function() {
 
  new Chart(
    document.getElementById('acquisitions'),
    {
      type: 'bar',
      data: {
        labels: data.map(row => row.date),
        datasets: [
          {
            label: 'Index records',
            data: data.map(row => row.value)
          }
        ]
      }
    }
  );
})();
