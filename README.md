# Hack4Community
ReUp is our project submission for the Hack4Community Hackathon

## DEVELOPER'S NOTE:
I've included a link to the live site [HERE](https://jolly-mccarthy-192d5e.netlify.app/).<br><br> Right now, the login system, user dashboard, and posting system are hosted locally using XAMPP, so they will be the only things not working on the live link.
## Inspiration

## What it does
ReUp facilitates clothing and textile exchanging that strengthens community ties. This in turn helps people to reduce waste and environmental pollution that results from clothing and textiles being mass-produced and eventually thrown away in landfills. ReUp helps people obtain clothing/textiles for free which helps reduce the need to buy additional items, as this consumer spending only facilitates environmental pollution caused by production in the clothing and textile industry. ReUp's exchange system also promotes the skills of creativity that come with repurposing as by engaging with the user-wide commenting system users make public what they intend to create with the exchanged item. By making exchanges public, we're ensuring that ReUp users make a social commitment to use what is being traded. 

## How we built it
The project lifecycle for ReUp started with our idea on focusing on the problem of waste and environmental pollution in the clothing and textile industry. This is where we came up with ReUp, a community available to all where people can connect and exchange their clothing and textile items they no longer use with items they aim to repurpose. We created sample user flows and different versions of site designs in Figma, which gave us a blueprint of how the live site would work. 

We created ReUp as a desktop website.The site and dashboard was created with HTML/CSS styling and for functionality we incorporated Javascript/PHP/MySQL. The login and registration systems were created with PHP to connect to the MySQL database. Additionally the user-wide commenting system to connect  registered users seeking to create exchanges and connections were also done with PHP. We had to connect the commenting form to a separate table holding user comments in the MySQL database. jquery/AJAX was used to update the commenting area once the user submits a comment to clear the comment form and display the user comment. 

To test our live site login/commenting system, (Crislana), hosted it on a local server using XAMPP. Additionally, we created a live version (excluding the database/login system as it's on localhost) hosted on netlify pushed by our github repo.

## Challenges we ran into
Crislana: Time zone was a big challenge personally. It was my first time collaborating with a teammate that was 11 hours apart from me (I'm based in the US and Srijeeta, my teammate, is based in India). Additionally, time management during the week was tough since we both have school, work, other responsibilities. It was my first time doing a week-long hackathon as well. Technically-wise, I'm still new to learning PHP, MySQL, and database design and it was my first time creating a commenting system so this was my first time using AJAX/jquery as well as really sift through the documentation to figure out the code.


## Accomplishments that we're proud of
Crislana: We are proud of building a finished, working product. Learning more about server connection, databases, login systems. We're also proud of having good team communication, being able to effectively collaborate despite the difference in timezones, and having good time management skills throughout the week.

## What we learned
We learned how to refine the project lifecycle of our site. Specifically, we figured out how to create an overall vision of the project through our team calls, which helped guide our tasks and deliverables needed to accomplish this vision of our MVP. Also, we learned how to prioritize our features. We had to ask ourselves what features were most important to us that helped deliver our solution to our problem statement. Finally, we learned how to communicate our idea. Due to time constraints, refining features/adding features is a challenge, so communicating what we want to include had we had additional time in our Figma prototype can help show our planning and direction of where we want to take our project.

## What's next for ReUp
Currently the site is hosted locally with XAMPP so the next thing to do is host live. We do have a live demo to show the site, however the login/commenting system is still on localhost. 
