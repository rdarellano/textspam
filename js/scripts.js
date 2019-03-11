  function checkForm(form) // Submit button clicked
   {
    //
    // check form input values
    //

    form.myButton.disabled = true;
    form.myButton.value = "Please wait...";
    return true;
   }

  function resetForm(form) // Reset button clicked
   {
    form.myButton.disabled = false;
    form.myButton.value = "Submit";
   }

