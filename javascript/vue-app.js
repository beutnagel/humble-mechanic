var app = new Vue({
  el: '#licensePlateForm',
  data: {
    licensePlate: '',
    brand: '',
    model: '',
    variant: '',
    fuel: '',
  },
  methods: {
    getLicensePlateInfo: function() {
      var data = new FormData();
      var REG_NUMBER = document.querySelector("#licensePlate").value;

      data.append("reg_number", REG_NUMBER);

      var xhr = new XMLHttpRequest();

      xhr.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
          console.log(this.responseText);
          let returnData = JSON.parse(this.responseText);
          console.log(returnData.result.brand);
          window.app.brand = returnData.result.brand;
          window.app.model = returnData.result.model;
          window.app.variant = returnData.result.variant;
          window.app.fuel = returnData.result.fuel;
        }
      });



      xhr.open("POST", "https://humble-mechanic-api.herokuapp.com/");


      xhr.send(data);
    }
  }

})
