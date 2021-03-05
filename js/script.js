const app = new Vue({
el: '#root',
data: {
  arrayDischi: [],
  arrayGeneri: [],
},
mounted() {
  let quel = this;
  axios.get('http://localhost/php/metHub/php-ajax-dischi/app/server.php')
  .then(function(resp) {
    quel.arrayDischi = resp.data
    console.log(quel.arrayDischi);
    quel.arrayDischi.forEach((item, i) => {
      if(!quel.arrayGeneri.includes(item.genere)){
        quel.arrayGeneri.push(item.genere);
      }
    });
    console.log(quel.arrayGeneri);
    })
  }
});
