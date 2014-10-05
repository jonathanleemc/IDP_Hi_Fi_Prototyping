 $(document).ready(function() {

        // default settings
        $('#user_id_data_validation').html('<br>');  
        $('#password_data_validation').html('<br>'); 

        $("#login-btn").click(function() {
            var hasError = false;

            var login_userid = document.getElementById("login_userid").value.trim();
            var login_password = document.getElementById("login_password").value;

            // data validations
            if(login_userid === "") {
                $('#user_id_data_validation').html('This field is required.');
                hasError = true;
            } else if(login_userid.length > 15) {
                 $('#user_id_data_validation').html('This field should not exceed 32 characters.');
                hasError = true;
            } else {
                var hasSpecialChar = false;
                // check if there are special characters                      
                for(var i=0; i<login_userid.length; i++) {
                    var letter = login_userid[i];                  
                    if( isNaN(letter) && !/[a-zA-z]/.test(letter) && letter != '@' && letter != '(' && letter != ')' && letter != '.' && letter != '-' && letter != '_' && letter != ',' && letter != ':' && letter != '!' && letter != '?' && letter != '+' && letter != ';' && letter != '=' || (letter == '^' || letter == '[' || letter == ']' || letter == '\\' || letter == '`') ) { 

                        $('#user_id_data_validation').html('Please input only <b> 0-9 a-z A-Z .  ,  !  ?  :  @  - +  _  (  ) ; = </b> into this field.');
                        hasError = true;
                        hasSpecialChar = true;
                        break;
                    }
                }                  
                if(!hasSpecialChar) {
                    $('#user_id_data_validation').html('<br>');
                }                 
            } // end if-else block

            if(login_password === "") {
                $('#password_data_validation').html('This field is required.');
                hasError = true;
            } else if(login_password.length > 15) {
                $('#password_data_validation').html('Password should not exceed 15 characters.');     
            } else {
                // check if there are special characters    
                var hasSpecialChar2 = false;
                for(var j=0; j<login_password.length; j++) {
                    var letter2 = login_password[j];                  
                    if( isNaN(letter2) && !/[a-zA-z]/.test(letter2) && letter2 != '@' && letter2 != '(' && letter2 != ')' && letter2 != '.' && letter2 != '-' && letter2 != '_' && letter2 != ',' && letter2 != ':' && letter2 != '!' && letter2 != '?' && letter2 != '+' && letter2 != ';' && letter2 != '=' || (letter2 == '^' || letter2 == '[' || letter2 == ']' || letter2 == '\\' || letter2 == '`') ) { 

                        $('#password_data_validation').html('Please input only <b> 0-9 a-z A-Z .  ,  !  ?  :  @  - +  _  (  ) ; = </b> into this field.');
                        hasError = true;
                        hasSpecialChar2 = true;
                        break;
                    }
                }                  
                if(!hasSpecialChar2) {
                    $('#password_data_validation').html('<br>');
                }                 
            } // end if-else block

            if(!hasError) {
                document.getElementById('login-form').submit();
            }
        });

    }); // end document ready function    