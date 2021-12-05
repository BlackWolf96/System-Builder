<template>
    <div class="content-container">
        <div class="build-wrapper p15">
            <div class="label">
            <label for="cpu">Processor</label>
            <select id="cpu">
                <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
            </select>
            </div>
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
                    producent: 'Intel',
                },
                {
                    id: 1,
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
    .label{
        border: 2px solid silver;
    }
    select{
        width:150px;
        height:25px;
        border-radius:5px;
        
    }
}
</style>