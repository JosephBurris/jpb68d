ec2 link- http://ec2-18-217-27-156.us-east-2.compute.amazonaws.com/index.php

So, for my application, I decided to use ec2 to host the domain. Then, I used the Okta API to take care of my SSO. Because this
is able to run off of the ec2 instance, the only thing that you should have to make sure your user has is PHP. Besides that, to
run the application, first follow the link to the website. When you have reached the index page, click the Log In link in order
to prompt the Okta login. Should you want to create an account, you can (Note: if you create an account, you will have to tie
in an email with it that is able to be verified). However, I have provided a test account to use. The test email account is 
test162345@gmail.com, and the password is: _Opensaysm3. There are also instructions on how to switch your user in the index
page.

New Features for Sprint 2:
- Added a feature to sign in as a different user (must wait 60 sec. after logging in).
- Added a survey feature that asks/displays several questions about the user's experience with the Software Engineering class.
  - This is done by sending a Request to a php page on the server that then sends the info to differing text files on the server for each question.
- Added a create user function that adds the user to the database provided by the Okta API.
