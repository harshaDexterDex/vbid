# VBid - Real time bidding platform
## Based on WeBid

### Initial setup

1. Deploy the application on XAMPP or WAMP.
2. Import the database:
  * Create a database using PhpMyAdmin and import the file in the /sql folder in to it. 
  * Change the config settings in includes/config.inc.php according to your database settings.
  * Change the 'siteurl' field in the _settings table in the database to reflect your machine name or just use 'localhost'
  
### Committing

To commit changes, do the following: 

1. Before you start development, always run a `git pull origin master`
2. Do all new development in a new branch, to create a new branch use `git checkout -b branchname`
3. Once you have made your changes, run `git add filename1 filename2` for the files you have changed.
4. `git commit -m "Useful commit message"`
5. `git push origin branchname`

**NOTE** : All changes committed to `heroku-staging` branch will be auto-deployed to Heroku - make sure your changes are reviewed before they are merged in to this branch.
