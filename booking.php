<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/jquery.timepicker.min.css">
    <link href="css/datepicker.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/booking-styles.css">
  </head>
  <body>
    <form action="" class="bookingForm">
      <input type="text" name="firstName" class="bookingForm__inputSmall" placeholder="First name">
      <input type="text" name="lastName" class="bookingForm__inputSmall" placeholder="Last name">
      <input type="tel" name="phone" class="bookingForm__inputSmall" placeholder="Phone number">
      <input type="text" name="email" class="bookingForm__inputSmall" placeholder="Email">
      <article class="licensePlate" id="licensePlateForm">
        <input id="licensePlate" type="text" name="licensePlate" class="licensePlate__input" placeholder="License plate">
        <button v-on:click.prevent="getLicensePlateInfo">GO!</button>
        <p class="licensePlate__text">Brand: {{ brand }}</p>
        <p class="licensePlate__text">Model: {{ model }}</p>
        <p class="licensePlate__text">Variant: {{ variant }}</p>
        <p class="licensePlate__text">Fuel: {{ fuel }}</p>
      </article>
      <input type="text" id="date" name="date" class="bookingForm__inputSmall bookingForm__date" placeholder="Date">
      <input type="text" id="time" name="date" class="bookingForm__inputSmall" placeholder="Time">
      <label class="bookingForm__checkbox"><input type="checkbox" name="terms" >I agree with the terms and conditions</label>
      <button type="submit" class="bookingForm__submit">Submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="javascript/jquery.timepicker.min.js"></script>
    <script src="javascript/datepicker.min.js"></script>
    <script src="javascript/scripts.js"></script>
    <script src="javascript/vue-app.js"></script>
  </body>
</html>
