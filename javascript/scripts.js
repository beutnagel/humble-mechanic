;(function ($) { $.fn.datepicker.language['en'] = {
    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    today: 'Today',
    clear: 'Clear',
    dateFormat: 'mm/dd/yyyy',
    timeFormat: 'hh:ii aa',
    firstDay: 0
}; })(jQuery);

$('#date').datepicker({
    language: 'en',
    minDate: new Date() // Now can select only dates, which goes after today
})

$('#time').timepicker({
    'minTime': '8:00am',
    'maxTime': '5:00pm'
});

var app = new Vue({
  el: '#bookingForm',
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
