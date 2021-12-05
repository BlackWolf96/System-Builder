<template>
  <div>
    <div class="wrapper">
      <nav class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <Home />
    </div>
    <Footer/>
  </div>
</template>

<script>
import Home from './components/Home.vue';
import Footer from './components/Footer.vue';

export default {
  name: 'App',
  components: {
    Home,
    Footer,
  },
  data() {
    return {
      msg: 'This is msg',
    }
  }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
body{
  margin:0;
  padding:0;
  color:white;
  font-family: 'Roboto', sans-serif;
}
.wrapper{
  width:100%;
  height:10vh;
  background-color:#000;
  font-weight:1rem;

  .navbar{
    position: absolute;
    right:0;
    margin-right: 10px;
    height:10vh;
    display:flex;
    align-items: center;
    justify-items: content;
    
    ul{
      list-style-type: none;
      display:flex;
      gap:25px;
    }
    a{
      color:white;
      text-decoration: none;
    }
  }
}
.container{
  margin-top:10vh;
  width:100%;
  background-color:#000;

}
</style>