express-sofa-warehouse
======================

Showcase of code for my Express Sofa Warehouse project. This project demonstrate how I have used PHP to template the 
website, and also make it easy for the CMS administrator to make content changes using 'Surreal CMS'.

index.php

The index file shows how I have used PHP include statements to add the header and footer. This allows me to make 
changes to one file, which will then be saved across the entire website.
I have also used PHP include statements here to add the product thumbnails to the 'featured products' category on the
homepage. 
All product thumbnails are used more then once throughout the website, making it easy for both the CMS administrator
and myself to make changes.

thumbnails/thumb-palermo.php

The thumb-palermo.php file is an example of a typical product thumbnail being used across the website. These files are 
used on the homepage, the menu/category pages and the single product pages under 'other available products'. Therefore, 
it is important for the CMS administrator that these file are only editable from one place.

sofa.php

The sofa.php file is an example of a category page, where the CMS administrator can create, read, update and delete
products within this category (sofas in this case). The whole product section is wrapped in a class called 'editable', 
telling 'Surreal CMS' this is an editable region. Then, each product is wrapped in a class called 'repeatable', which 
tells the CMS this section of code can be copied, reordered and deleted. 

sofas-palermo.php

The sofas-palermo.php file is an example of a single product page. The CMS administrator can edit any information 
and images from here. I have also created a template of this file in 'Surreal CMS' that can be used to create new pages.
