//JS Script
"use strict";

window.addEventListener("load", run, false);

function run() {
  let map_btn = document.getElementById("map-btn");
  
  if (map_btn != null) {
    map_btn.addEventListener("click", function(){
      let scrollIt = setTimeout(function(){
      console.log("scrolled");
      document.documentElement.scrollTo({
          left: 0,
          top: document.documentElement.scrollHeight - document.documentElement.clientHeight,
          behavior: 'smooth'
        });
      }, 500);
    }, false);
  }
  
  let prod_form = document.getElementById("add-item");
  
  if(prod_form != null) {
    let minus_btn = document.getElementById("minus-1");
    let plus_btn = document.getElementById("plus-1");    
    let value_input = document.getElementById("item-qty");
    
    minus_btn.addEventListener("click", minus_handler, false);
    plus_btn.addEventListener("click", plus_handler, false);
    
    let span = document.getElementById("number");
    
    window.addEventListener("click", change_handler, false);
    
    function change_handler() {
      let item_value = parseInt(document.getElementById("number").innerText);
      
      if (item_value > 99) {
        item_value = 99;
        span.innerText = item_value;
        
        value_input.value = item_value;
      }
    }
    
    function minus_handler() {
      let item_value = parseInt(document.getElementById("number").innerText);
      
      if (item_value > 1) {
        item_value = item_value - 1;
        span.innerText = item_value;
        
        value_input.value = item_value;
      }
    }
    
    function plus_handler() {
      let item_value = parseInt(document.getElementById("number").innerText);      
      
      if (item_value < 99) {
        item_value = item_value + 1;
        span.innerText = item_value;
          
        value_input.value = item_value;
      }
      else {
        item_value = 99;
        span.innerText = item_value;
          
        value_input.value = item_value;
      }
    }
    
  }
  
}