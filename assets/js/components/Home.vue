<template>
    <div class="content-container">
        <div class="build-wrapper p15">
            <fieldset>
                <div class="item">
                    <h3>Producer</h3>
                    <select id="cpu">
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
                    </select>
                </div>
                <div class="item">
                    <h3>Socket</h3>
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
                        <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
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
            Voltage: {{ woltage }}

        </div>
            
    </div>
</template>

<script>
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
            woltage: 0,
        }
    }
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