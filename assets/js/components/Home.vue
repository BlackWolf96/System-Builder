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
                    <select id="cpu">
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
            <fieldset>
                <div class="item">
                    <h3>Amount</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>Producer</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>Model</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>OC</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
            <legend>Graphic Card</legend>
            </fieldset>
            <fieldset>
                <div class="item">
                    <h3>RAM</h3>
                    <select id="cpu">
                        <option v-for="item in info" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>SATA</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>M2</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>PATA</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
            <legend>System</legend>
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
            processor: [
                { 
                    id: 0,
                    producent: 'Wybierz',
                },
                {
                    id: 1,
                    producent: 'Intel',
                },
                {
                    id: 2,
                    producent: 'AMD',
                }
            ],
            woltage: 20,
            info: null
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

