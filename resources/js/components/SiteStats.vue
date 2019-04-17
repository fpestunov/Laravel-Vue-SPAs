<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest">Site Stats</h1>

        <ul>
            <li><strong>Total series:</strong> {{ series }}</li>
            <li><strong>Total lessons:</strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },

        created() {
            axios.get('http://127.0.0.1:8000/api/stats').then(response => {
                let { data } = response;

                this.series = data.series;
                this.lessons = data.lessons;
            });
        }
    };
</script>
