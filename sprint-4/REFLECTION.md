Projects I looked at:

I looked at all of the 3 projects that were mentioned in the assignment specifications document. That means that I looked at
OAuth, uPort and OpenID.

Which one I chose and why:

I essentially decided to go with 2 of the options. While researching which was the best to use, I came across okta. An
authentication API that uses Oauth 2.0 for API security, and OpenID Connect for user authentication and single sign-on (SSO)
functionality.

I stumbled across this API accidentally while I was researching OAuth 2.0. After looking into it, I was impressed by its
user-friendliness, flexibility, and easy-implementation. Also, it has solutions for the different problems I thought I was
going to come across. It allows for management of users, creation of new users (in app), and mutliple solutions for login
security.

How far I got in making it:

So far, the login is working perfectly. The only thing that I haven't implemented yet is the user-creation bit. Although I
did see how to do it, I don't think I have enough time. Also, I have done my best to run a check for session-activation
so that you cannot "URL-hop" over my index.php page to my home.php page, but it has been a while, so it is possible that
I missed something (and I can't find anything about checking for authentication tokens between pages at the moment).

Obstacles Encountered:
The biggest obstacle I encountered was trying to figure out how to use the API properly. At first I struggled because I did
not understand how to create a base URI to run off of using Amazon AWS (although I would love to know!). So, I figured that
since I did not understand, the best solution was to run the project off of localhost. Then, it took me a while to figure out 
how to run localhost on my machine, and configure it to the API, but after awhile, I did it. Then, the actual coding part was
not too bad.In accordance with okta's "making OAuth painless" catchphrase, they provide several examples on how to implement
their APIusing several languages, including PHP (which I am TOO familiar with). So, I based my code off of that, and implemented
it in such a way that there were 2 pages, a login and a home page to direct to. After that, it was just a matter of making the
test user in okta correspond with the new test email that I had created.
