<?php
/*
Plugin Name: SK BMI Calculator
Plugin URI: https://sheraz.dev/bmi-calculator
Description: A simple plugin to calculate Body Mass Index (BMI).
Version: 1.0
Author: Muhammad Sheraz
Author URI: https://sheraz.dev
*/





function bmi_calculator_shortcode() {
    return '
    <form>
        <label>Height (in cm):</label>
        <input type="text" name="height" id="height" required>
        <br><br>
        <label>Weight (in kg):</label>
        <input type="text" name="weight" id="weight" required>
        <br><br>
        <input type="submit" value="Calculate BMI">
    </form>
    <br>
    <div id="bmi-result"></div>
    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            var height = document.querySelector("#height").value;
            var weight = document.querySelector("#weight").value;
            var bmi = weight / (height / 100 * height / 100);
            document.querySelector("#bmi-result").innerHTML = "Your BMI is " + bmi.toFixed(2);
        });
    </script>
    ';
}
add_shortcode('bmi_calculator', 'bmi_calculator_shortcode');
