# PHP_Full_Course_for_non-haters.
### PHP Full Course for non-haters From Bro code you tube channe.
- [Video Tutorial of this reppo](https://youtu.be/zZ6vybT1HQs?si=Tduc5vDxj-vLaZMG).
#### 1. Variable (13:58 in video).
- practice variable.
#### 2. $_GET or $_POST Method (45:13 in video).
- example of a food price calculate.
- not using localhost or any database only out_put tha input value with calculted.
#### 3. if else (1:00 & 1:19 logic video).
- just use if_else and post method, not used localhost or any database.
#### 4. While_loop Practice(01:36:45 video).
- Practice while loop with stop button useing.
- in while loop we can run the loop without `$i++` variable increment .
- it can run infinitely not like for loop.
#### 5. foreach practice(02:01:09 in video)(foreach in isset part).
- it won't work if don't set the action path properly.
- using form input username password.
- this $_POST will return every input element from html.
#### 6. Function in PHP(02:27:40 in video).
- just using a simple return function.
#### 7. Session in PHP (03:09:18 in video).
- in session we can acess otehr page variable data but,
- we have to use session start, otherwise it won't work.
- session won't work until we use `session_start();`
- we practice session with <b> input value by form </b>
- we also use `session_destroy();` function which will distroy the session and have to login again.
#### 8. Server in PHP (03:17:05 in video).
- Server Super Globel nearly show everything we need to know about the current web page environment.
- But now we only look at `PHP_SELF`, `REQUEST_METHOD` and other info is more advanced.
- with server we can update form by PHP self, we have to update one time only even we change multiple time the file name `<?php $_SERVER[PHP_SELF]?>`;
#### 9. Password Hashing(03:23:37 in video).
- `password_hash();` is the password hash function. 
- it have two argunment <b> 1st is $password variable </b> and <b> 2nd agrunment is constant `PASSWORD_DEFAULT` </b>
#### 9.2  Password Hash verify(03:25:05 in video).
- `password_verify` function have two argunment 1st is <b> input new password </b>
- and 2nd is the <b> $hash variable </b> what we set before.
#### 10. My SQl Database.
- we use try catch in database connect page in catch we have to use `mysqli_sql_exception`
