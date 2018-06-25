## Setup your wordpress instance

**Navigate to your desktop (assumed) or any folder where you place your code**

```
cd ~/Desktop
```

**Download the container file**

```
curl -LOk https://github.com/bcsjk11/COMP5210-mini-press/archive/master.zip && \
unzip master.zip && \
rm -rf master.zip
```

**Go into the folder**

```
cd COMP5210-mini-press-master
```

**Run the container**

```
docker-compose up -d
```

**Run the wordpress setup**

```
http://localhost/

```

**Create back up of your database**

```
docker exec wp_mysql_5210 /usr/bin/mysqldump -u root --password=123 db5210 > backup.sql
```

**Restore your back up of your database**

```
cat backup.sql | docker exec -i wp_mysql_5210 /usr/bin/mysql -u root --password=123 db5210
```

**Copy the backup.sql file into your main wp folder**

```
cp databases/wp_mysql_5210/backup.sql .
```

## Create a child Theme:

**Create a new folder in**  `COMP5210-mini-press-master/wp-content/themes/`

named, chosen theme with -child appended to it

**Open this folder in VSCode**

Create a style.css and a functions.php file

**Code Snippet for style.css:**

Change the details to suit your theme and details

```
/*
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twenty-fifteen-child
*/
```

**Code snippet for functions.php**

```
<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
```

### Useful links :-)

> DB Backup and Restore: https://gist.github.com/spalladino/6d981f7b33f6e0afe6bb

> Git ignore for Wordpress: https://gist.github.com/salcode/b515f520d3f8207ecd04
