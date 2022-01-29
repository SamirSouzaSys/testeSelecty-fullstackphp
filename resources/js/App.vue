<template>
  <div>
    <navbar-component></navbar-component>
    
    <main class="container">
      <div class="text-center"
        style="margin: 100px 0px 20px 0px"
      >
        <h1 class="text-secondary">Teste Selecty - Fullstack-PHP</h1>
      </div>
      <br />
      <router-view></router-view>
      <br/>
       
    </main>
  </div>
</template>
 
<script>
  export default {};
</script>

<style>
  /* main {
    margin-top: 80px;
  } */
</style>
