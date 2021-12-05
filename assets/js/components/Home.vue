<template>
    <div class="content-container">
        <div class="build-wrapper">
            <select>
                <option v-for="item in processor" :key="item.id">{{ item.producent }}</option>
            </select>
        </div>
        <div class="info-wrapper">
            {{ woltage }}
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

    .build-wrapper{
        width:60%;
        height:600px;
        background-color:red;
        padding:15px;
    }
    .info-wrapper{
        width:35%;
        background:yellow;
    }
}
</style>