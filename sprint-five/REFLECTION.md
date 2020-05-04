What Worked for my Application:
- I successfully created a working site that is able to sign the user on if they have an Okta account.
- I enabled the account creation function, that allows users to create new accounts that allow them to log into the application.
- I created a mock "database" that is very basic (essentially just text files). That allows new information to be saved, and old information to be recalled.
- I did create what is essentially a "switch user" function, but it is not where I would like it to be. I created a work-around in which the user is re-prompted to sign in every 0 mins. that they are not logged in. (However 0 mins. translates to 59 sec., so you technically have to wait that long to sign in with a different account).

What Didn't Work for my Application:
- I found a solution for the switch user problem, but unfortunately, the way that the person set up their application was significantly different, and admittedly more complicated, then my application. So, I made the decision that trying to implement it was too time consuming for the time frame we have.
- I tried to create a switch user function by deleting the current session and setting the session array to nothing. However, the main problem that I ran into was that I could not reset the session without getting rid of the token that was provided by Okta (of which they have a limitation on how many tokens can be provided per session).
- I, at first, tried to echo in all of the HTML from a seperate document, but I realized that PHP was not loading in the HTML
properly (it would sometimes be out of order). So, I just decided to include the HTML as part of the redirect for home.php.

Future Plans:
- I am fairly happy with my application so far. The one thing I might implement is either a couple of more questions, or some questions that are a little bit less binary.
- Also, if I am able to find a better solution for switching user, I will include it. However, I doubt it will happen by the end of the semester, because the one solution I found does not seem implementable by the end of the semester.
- Besides that, I have created what I set out to do with the SSO part of my application, mainly because Okta made it so easy to implement.

Major Websites I Used:
- https://developer.okta.com/blog/2018/12/28/simple-login-php

- https://developer.okta.com/blog/2018/07/09/five-minute-php-app-auth

- https://www.tutorialspoint.com/php/php_sessions.htm

- https://help.okta.com/en/prod/Content/Topics/Directory/eu-people.htm

(Note: For the part of the app that saves information to .txt files, I definitely based the code from work that was on another website. However, I did this a semester ago in my Web Developement Class. So, I just semi-reused code from that project, but unfortunately I did not save the website that I based the code off of originally.)
