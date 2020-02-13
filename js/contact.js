/**
  * Index JS file to handle contact form functionality
  * Author: Emmanuel Munoz
  * Date: February 2020
*/
(function() {
   window.addEventListener("load", main);

   const CONTACT = "contactform.php";

   /**
     * Sets the event listener for the form
   */
   function main() {
      let contactForm = id("contact-form");
      contactForm.addEventListener("submit", function(e) {
         e.preventDefault();
         submitForm(contactForm);
      });
   }

   /**
     * Makes a fetch POST request to submit the contact form data to the backend
   */
   function submitForm(contactForm) {
      let data = new FormData(contactForm);
      fetch(CONTACT, {method: 'POST', body: data})
         .then(checkStatus)
         .then(function() {
            contactForm.reset();
            displaySuccess();
         })
         .catch(displaySuccess);
   }

   /**
     * Displays the success message from the server to the page
   */
   function displaySuccess() {
      id("output-msg").textContent = "Successfully added your message. Thank you!";
   }

   /**
     * Checks and reports on the status of the fetch call
     * @param {String} response - The response from the fetch that was made previously
     * @return {Promise/String} - The success code OR The error promise that resulted from the fetch
   */
   function checkStatus(response) {
      if (response.status >= 200 && response.status < 300 || response.status === 0) {
         return response.text();
      } else {
         return Promise.reject(new Error(response.status + ": " + response.statusText));
      }
   }

   /**
    * Returns the HTMLDOM element with given id
    * @param {String} name - The ID of the element we are retrieving
    * @returns {HTMLDOM} - The HTMLDOM object of the element with given ID
    */
   function id(name) {
      return document.getElementById(name);
   }

   /**
    * Returns the first HTMLDOM element with given selector
    * @param {String} selector - The selector of the element we are retrieving
    * @returns {HTMLDOM} - The HTMLDOM object of the element with given selector
    */
   function qs(selector) {
      return document.querySelector(selector);
   }

   /**
    * Returns an array of all the HTMLDOM elements that match given selector
    * @param {String} selector - The selector of the element we are retrieving
    * @returns {HTMLDOM[]} - All the HTMLDOM elements that match the selector
    */
   function qsa(selector) {
      return document.querySelectorAll(selector);
   }

   /**
    * Returns a new element with the tag of the specified string
    * @param {String} element - The tag of the element we are creating
    * @returns {HTMLDOM} - The new HTMLDOM element with the specified tag
    */
   function gen(element) {
      return document.createElement(element);
   }
})();
