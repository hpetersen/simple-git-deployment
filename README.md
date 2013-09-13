## Simple git deployment script


Simple and secure post-receive hook. The script is written in PHP and allows you to automatically deploy a github, bitbucket, gitlab or any other git hosted repo to a production server.

The script uses a GET request to authenticate Github to do a "git push", so any stranger donsn't push the repo accidentally.


# Usage

	* Configure `deploy.php` with a new secure key in the GET-request code on line 7.
	* Upload `deploy.php` to the webserver and put it somewhere that's accessible from the Internet. 
	* Go to WebHooks in Github or any other service and set the post-recive url to `http://example.com/deploy.php?YOURESECUREKEY`