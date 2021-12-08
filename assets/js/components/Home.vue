<template>
    <div class="content-container">
        <div class="build-wrapper p15">
            <fieldset>
                <div class="item">
                    <h3>Producer</h3>
                    <select id="cpu">
                        <option v-for="item in info" :key="item.id">{{ item.producer }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>Socket</h3>
                    <select id="cpu" v-if="selectedProducer == 'Intel'">
                        <option v-for="item in info" :key="item.id">{{ item.socket }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>Model</h3>
                    <select id="cpu">
                        <option v-for="item in info" :key="item.id">{{ item.model }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>OC</h3>
                    <select id="cpu">
                        <option v-for="item in info " :key="item.id">{{ item.overclocking }}</option>
                    </select>
                </div>
            <legend>Processor</legend>
            </fieldset>
        </div>
        <div class="info-wrapper p15">
            <h4>CPU:</h4>
            <h4>GPU:</h4>
            <h4>Ram:</h4> 
            <h4>SSD:</h4> 
            <span><h4>Power:</h4> {{ woltage }}</span>

        </div>
            
    </div>
</template>

<script>
import axios from 'axios';

export default{
    name: 'Home',
    data() {
        return {
            info: null,
            selectedProducer: 'Intel',
        }
    },
    mounted(){
        axios
            .get(`http://127.0.0.1:8000/app/json`)
            .then(response => (this.info = response.data));
    },
}
</script>

<style scoped lang="scss">
.content-container{
    width:100%;
    display:flex;
    gap:5%;

    .p15{
        padding:15px;
    }
    .build-wrapper{
        width:60%;
        height:600px;
    }
    .info-wrapper{
        width:35%;
    }
    fieldset{
        padding:25px;
        display:flex;
    }
    .item{
        width:25%
    }
    select{
        width:120px;
        height:25px;
    }
}
</style>

