# Manifesti.co

simple project for learning the fundamentals of:
* laravel 4
* composer
* pagodabox & associated workflow

## DB structure

### manifestos
* id
* name
* slug
* text
* signature (optional small text at the bottom)
* theme
* custom_css (optional css overriding theme)
* custom_artwork (S3 URL in case it's a custom artwork and not a generated manifesto)
* link (optional external url)
* email
* secret (/edit?secret=23rupoiudfue4 -> edit mode)
* views (how many times it has been viewed)
* stars (rating)
* pic_url (storing it for optimization purposes at fixed resolution)
* created_at
* updated_at

### tags
* id
* name
* slug

### tag_manifesto (pivot)
* id
* tag_id
* manifesto_id

## Components
* laravel4 back-end, running on pagodabox
* phantomjs @ nodejs for saving as picture, running on AWS / heroku (http://www.slideshare.net/shinichitomita/phantomjs-screenshot-server-on-heroku)
* S3 bucket for storing images
* sendgrid for email sending
* custom front-end with bootstrap, jquery and slabtext for typography

## Steps
* (done) laravel back-end, db (no tags)
* (done) tags
* front-end (rendering)
* sendgrid
* phantomjs => download as picture
* phantomjs + S3 bucket
* social sharing
* upload custom artwork