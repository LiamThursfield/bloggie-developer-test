# Bloggie - Developer Test

## Setup
* Copy this project to a new repo on github, using best practices for your commits.
* Install the laravel project as normal - using yarn as the JS package manager.
* Run the migrations & seeder to get the initial data (Blogs and Users) set up.
* There is admin panel that is only accessible to logged in users, there is no link to it on the website, so navigate to `/admin` to access it.

## Initial Tasks
* The expiry date is not being saved when creating OR editing a blog post in the admin panel. Investigate and fix.
* Ensure the "Latest Blogs" section on the website home page is showing the most recently published, live posts.
* Ensure the "Latest Blogs" section on the website home page is only showing up to 3 posts.
* The "Featured Blogs" section is not showing any blogs, even when there is valid data in the database. Investigate and fix.
* The client would like the "Featured Blogs" to be ordered by the most recently featured first.  
* Ensure the frontend/website `/blogs` page is showing live blogs, ordered by the most recently published first.
* When clicking through to a blog post from `/blogs` page, we are getting a 404.
* Clear as many console log errors as possible.
* The client would like a new field adding to the blogs for a second section of content. Implement this functionality.
    * There is no need to worry about the styling of the section frontend website, just add it as a new `<p>` tag below the main content. 

## Extended Tasks
The client wants a testimonial section adding to the site. 
These are reviews that a customer has sent in via email, survey, form, etc. 

They will be manually added to the system by a user with access to the admin panel.

So: 
* Implement the functionality to create, edit, view testimonials (reviews) in the admin. 
    * user_name - The First and Last name of the person who left the testimonial
    * message - A short message that the user has left
    * rating - A numerical rating 0-5 (inclusive) - with 5 being the best.
* Show the testimonials on the website accessed via the url `/what-our-customers-say-about-us`
    * There is a vue component `<testimonial-card>` pre-built, requiring no changes. You can just pass the testimonial through as a prop. (No changes are required in this file)
* Add a link in the header nav, next to the "Blog Posts" link, called "Reviews"
* Add a "Latest Blogs" section to the bottom of the new testimonial page, that shows up to 9 of the latest (live) posts.       
* Add a "Latest Testimonials" section to the website homepage below "Featured Blogs", showing the 3 latest testimonials. 
     
## Finally 
* Are there any changes you'd make to the code base to "clean" it up or make it more efficient.  
    * Note: You do not need to make these changes, just brainstorm a few ideas.

---------------------------    
    
## Hints / Notes
* When referring to the "frontend" or "website" for this test, we mean the pages accessible as a guest i.e. pages where the url does not start with `/admin`
* When referring to "admin" or "admin panel" for this test, we mean pages that require a user to be logged in i.e. pages where the url starts with `/admin`
* Any environment variables that you need are in the example env file.
* There is no way to register a user, however you can find the email and password for the test user in the seeder.
* A "live" post is one with a published at date in the past, and an expired date that is null or in the future.
* A featured post is a post that has featured_at set, however it should only be visible on the website if it is "live" (see above) and has a featured date in the past.
* You shouldn't need to install any additional packages (php or js) to complete these tasks.
* Laravel Debugbar and Laravel Telescope have been installed to help with any debugging if required.