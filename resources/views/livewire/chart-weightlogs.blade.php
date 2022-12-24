<div class="mb-10"
    x-data="{
        logs: @entangle('weightLogs'),
        init() {
            const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

            const data = {
                 labels: labels,
                 datasets: [{
                     label: `Weight Logs`,
                     backgroundColor: 'lightgray',
                     data: [this.logs],
                 }]
             };
             const config = {
                 type: 'line',
                 data: data,
                 options: {}
             };
             const weightChart = new Chart(
                 this.$refs.canvas,
                 config
             );

        }
    }">
    <canvas id="weightChart" x-ref="canvas"></canvas>
</div>
