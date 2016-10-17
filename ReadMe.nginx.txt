If you're running WordPress on nginx, you may encounter the following problem:

	- Switching to the second page of search results throws you to the main second page.

To resolve this issue, verify that the server configuration in *location* section and *try_files* parameter has $args:

server {
	...

	location / {
		try_files $uri $uri/ /index.php?$args;
	}

	...
}

Thanks *MultiformeIngegno* from http://wordpress.stackexchange.com/a/83174 for the hint.
