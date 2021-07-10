<?php

function is_prod()
{
    $host = $_SERVER['HTTP_HOST'];
    $isProd = strpos($host, 'davidlobo.co.uk') === true ? true : false;
    $isProd = false;
    return $isProd;
}

function assets_version()
{
    if (is_prod()) {
        echo "1.6";
    } else {
        echo time();
    }
}

function render_js_vars()
{
    $js_vars = array();
    $galleries = array();
    $portfolio = get_full_portfolio();
    foreach ($portfolio as $key => $value) {
        $galleries[$key] = $value['gallery'];
    }

    $js_vars['galleries'] = $galleries;
    echo '<script>';
    echo 'var js_vars = ' . json_encode($js_vars) . ';';
    echo '</script>';
}

function get_portfolio($restricted)
{
    $portfolio = get_full_portfolio();
    if (empty($restricted)) {
        return $portfolio;
    }
    return array_filter($portfolio, function ($item) use ($restricted) {
        return !in_array($item['alias'], $restricted);
    });
}

function get_full_portfolio()
{
    $imagePath = 'images/portfolio/';
    $portfolio = array(
        'trainboards' => array(
            'alias' => 'trainboards',
            'title' => 'Trainboards',
            'description' => 'Trainboards web app',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'React',
                'Laravel 8',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://trainboards.org.uk'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/trainboards/page1.jpg',
                    'subHtml' => 'Trainboards lets you create custom train departure boards'
                ),
                array(
                    'src' => 'images/portfolio/trainboards/page2.jpg',
                    'subHtml' => 'Listing all your departure boards'
                ),
                array(
                    'src' => 'images/portfolio/trainboards/page3.jpg',
                    'subHtml' => 'Editing the departure board'
                ),
                array(
                    'src' => 'images/portfolio/trainboards/page4.jpg',
                    'subHtml' => 'Departure board display page'
                )
            )
        ),
        'postbook' => array(
            'alias' => 'postbook',
            'title' => 'Postbook',
            'description' => 'Postbook web app',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'VueJS 3',
                'Laravel 8',
                'Tailwind CSS'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://postbook.app'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/postbook/page1.jpg',
                    'subHtml' => 'Postbook is a tool to help you collect addresses'
                ),
                array(
                    'src' => 'images/portfolio/postbook/page2.jpg',
                    'subHtml' => 'Listing all addresses collected'
                ),
                array(
                    'src' => 'images/portfolio/postbook/page3.jpg',
                    'subHtml' => 'Shareable collect address form'
                ),
                array(
                    'src' => 'images/portfolio/postbook/page4.jpg',
                    'subHtml' => 'Download addresses as Excel or CSV file'
                ),
                array(
                    'src' => 'images/portfolio/postbook/page5.jpg',
                    'subHtml' => 'Import addresses from Excel or CSV file'
                )
            )
        ),
        'footballfixtures' => array(
            'alias' => 'footballfixtures',
            'title' => 'Football Fixtures',
            'description' => 'Football Fixtures web app',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'React',
                'Node',
                'React Bootstrap',
                'Heroku'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://footballfixtures.app'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/footballfixtures/page1.jpg',
                    'subHtml' => 'Football fixtures for Premier League clubs'
                )
            ),
        ),
        'readinglists' => array(
            'alias' => 'readinglists',
            'title' => 'Reading Lists',
            'description' => 'Reading List web app',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'React',
                'React Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://readinglists.app'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/readinglists/page1.png',
                    'subHtml' => 'List all your reading lists'
                ),
                array(
                    'src' => 'images/portfolio/readinglists/page2.png',
                    'subHtml' => 'List books within a reading list'
                ),
                array(
                    'src' => 'images/portfolio/readinglists/page3.png',
                    'subHtml' => 'Search with Google Book API for any book'
                ),
                array(
                    'src' => 'images/portfolio/readinglists/page4.png',
                    'subHtml' => 'Display book info from the api'
                ),
                array(
                    'src' => 'images/portfolio/readinglists/page5.png',
                    'subHtml' => 'Export or import books in JSON format'
                )
            ),
        ),
        'allrescues' => array(
            'alias' => 'allrescues',
            'title' => 'AllRescues',
            'description' => 'Dog rehoming search app',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Node',
                'VueJS',
                'MySQL',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://allrescues.org.uk'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/allrescues/page1.jpg',
                    'subHtml' => 'List available dogs from different UK charities'
                ),
                array(
                    'src' => 'images/portfolio/allrescues/page2.jpg',
                    'subHtml' => 'Allow filtering by postcode and dog criteria'
                ),
                array(
                    'src' => 'images/portfolio/allrescues/page3.jpg',
                    'subHtml' => 'Display dog details and link to official rehoming page'
                )
            ),
        ),
        'wis' => array(
            'alias' => 'wis',
            'title' => 'Work In Startups',
            'description' => 'The home of UK startup jobs',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Zend',
                'PHP',
                'MySQL',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => '',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://workinstartups.com'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/wis/page1.jpg',
                    'subHtml' => 'Work In Startups homepage after redesign'
                ),
                array(
                    'src' => 'images/portfolio/wis/page2.jpg',
                    'subHtml' => 'Work In Startups homepage before redesign'
                ),
                array(
                    'src' => 'images/portfolio/wis/page3.jpg',
                    'subHtml' => 'List jobs page'
                ),
                array(
                    'src' => 'images/portfolio/wis/page3.jpg',
                    'subHtml' => 'Job details page'
                )
            ),
        ),
        'tfw' => array(
            'alias' => 'tfw',
            'title' => 'TFW Printers',
            'description' => 'Bespoke printers checklist system',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Laravel',
                'PHP',
                'MySQL'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Bespoke printers checklist system',
                'links' => array(
                    'github' => array(
                        'url' => 'https://github.com/david-lobo/tfw'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/tfw/page1.png',
                    'subHtml' => 'User Login with ACL Roles'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page2.png',
                    'subHtml' => 'Print job listing with CRUD'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page3.png',
                    'subHtml' => 'Edit Job with modal'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page4.png',
                    'subHtml' => 'QA Question listing with CRUD'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page5.png',
                    'subHtml' => 'Subquestions entry with tree structure'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page6.png',
                    'subHtml' => 'Enter checks for each question/subquestion'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page7.png',
                    'subHtml' => 'User selects a main question'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page8.png',
                    'subHtml' => 'User is shown checks to perform for QA'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page9.png',
                    'subHtml' => 'User prints the final PDF checklist with all questions'
                ),
                array(
                    'src' => 'images/portfolio/tfw/page10.png',
                    'subHtml' => 'Example of PDF checklist generated'
                )
            ),
        ),
        'vuemovie' => array(
            'alias' => 'vuemovie',
            'title' => 'VueMovie',
            'description' => 'Movie database web app with VueJS',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'VueJS',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Movie database web app with VueJS',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://david-lobo.github.io/vue-movie/dist/'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/vuemovie/page1.jpg',
                    'subHtml' => 'Search using Movie API'
                ),
                array(
                    'src' => 'images/portfolio/vuemovie/page2.jpg',
                    'subHtml' => 'View movie and cast details'
                )
            ),
        ),
        'brave' => array(
            'alias' => 'brave',
            'title' => 'Brave Productions',
            'description' => 'Subscription online training portal',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Wordpress',
                'Woocommerce',
                'PHP',
                'Sage 9',
                'Responsive'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Wordpress site for the online training portal',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://bravepro.com'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/brave/page1.jpg',
                    'subHtml' => 'Brave home page'
                ),
                array(
                    'src' => 'images/portfolio/brave/page2.jpg',
                    'subHtml' => 'Courses page with purchase CTA'
                ),
                array(
                    'src' => 'images/portfolio/brave/page3.jpg',
                    'subHtml' => 'Custom Cart page'
                ),

                array(
                    'src' => 'images/portfolio/brave/page4.jpg',
                    'subHtml' => 'Logged-in Subscriber portal'
                ),
                array(
                    'src' => 'images/portfolio/brave/page5.jpg',
                    'subHtml' => 'Logged in Customer portal'
                ),
                array(
                    'src' => 'images/portfolio/brave/page6.jpg',
                    'subHtml' => 'Coaching info page'
                ),
                array(
                    'src' => 'images/portfolio/brave/page7.jpg',
                    'subHtml' => 'About page'
                ),
                array(
                    'src' => 'images/portfolio/brave/page8.jpg',
                    'subHtml' => 'Contact page'
                )
            ),
        ),
        'kgm' => array(
            'alias' => 'kgm',
            'title' => 'Kigali Genocide Memorial',
            'description' => 'Charity Donations Page',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Wordpress',
                'PHP',
                'Stripe',
                'Sage 8',
                'Responsive'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Donations page with Stripe & Infusionsoft integration',
                'links' => array(
                    'visit' => array(
                        'url' => 'https://www.kgm.rw/donate/'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/kgm/page1.jpg',
                    'subHtml' => 'New onepage donations page'
                ),
                array(
                    'src' => 'images/portfolio/kgm/page2.jpg',
                    'subHtml' => 'Our Work section'
                ),
                array(
                    'src' => 'images/portfolio/kgm/page3.jpg',
                    'subHtml' => 'Who We Are section'
                ),

                array(
                    'src' => 'images/portfolio/kgm/page4.jpg',
                    'subHtml' => 'Our Projects section'
                ),
                array(
                    'src' => 'images/portfolio/kgm/page5.jpg',
                    'subHtml' => 'Stories section'
                ),
                array(
                    'src' => 'images/portfolio/kgm/page6.jpg',
                    'subHtml' => 'Stripe Checkout modall'
                )
            ),
        ),
        'pit' => array(
            'alias' => 'pit',
            'title' => 'The Pit',
            'description' => 'Task Tracking Web App',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Laravel',
                'PHP',
                'MySQL',
                'VueJS'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Wordpress site for Seedrs Alumni Club members.'
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/pit/pit-login.jpg',
                    'subHtml' => 'Login using Basecamp API Autnentication'
                ),
                array(
                    'src' => 'images/portfolio/pit/pit-app.jpg',
                    'subHtml' => 'Todo planning app'
                )
            ),
        ),
        'seedrs' => array(
            'alias' => 'seedrs',
            'title' => 'Seedrs Alumni Club',
            'description' => 'A community for Seedrs-funded entrepreneurs.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Wordpress',
                'PHP',
                'MySQL',
                'Responsive'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Wordpress site for Seedrs Alumni Club members.',
                'links' => array(
                    'visit' => array(
                        'url' => 'http://alumniclub.seedrs.com/'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/seedrs/login.jpg',
                    'subHtml' => 'Custom login page for Admin'
                ),
                array(
                    'src' => 'images/portfolio/seedrs/home.jpg',
                    'subHtml' => 'Home page access for members only'
                ),
                array(
                    'src' => 'images/portfolio/seedrs/partners.jpg',
                    'subHtml' => 'Partners Page'
                ),
                array(
                    'src' => 'images/portfolio/seedrs/follow-on-funding-1.jpg',
                    'subHtml' => 'Custom marketing Wordpress page template'
                ),
                array(
                    'src' => 'images/portfolio/seedrs/follow-on-funding-2.jpg',
                    'subHtml' => 'Custom marketing Wordpress page template'
                ),
                array(
                    'src' => 'images/portfolio/seedrs/members.jpg',
                    'subHtml' => 'Members directory page'
                )

            ),
        ),
        'thereadingroom' => array(
            'alias' => 'thereadingroom',
            'title' => 'TheReadingRoom',
            'description' => 'One of the world\'s fastest growing social discovery platforms for books.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Zend',
                'PHP',
                'MySQL',
                'Doctrine',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Bespoke CMS to manage the admin functions of TheReadingRoom website.',

                'links' => array(
                    'more' => array(),
                    'visit' => array(
                        'url' => 'http://www.bookstr.com'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => $imagePath . 'thereadingroom/dashboard.jpg',
                    'subHtml' => 'Dashboard with live snapshot reports and graph reporting by date range'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/list_books.jpg',
                    'subHtml' => 'Listing and searching of millions of books using Elasticsearch and Doctrine.'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/edit_book.jpg',
                    'subHtml' => 'Editing Books easily using the forms'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/create_voucher.jpg',
                    'subHtml' => 'Validatng input data based on business rules'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/merge_book.jpg',
                    'subHtml' => 'Merging books - Complex business processes made easy for the Admin user'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/email_tracking.jpg',
                    'subHtml' => 'Graphs displaying internal data such as email tracking'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/arc_reporting.jpg',
                    'subHtml' => 'Custom filters and date range used for reporting'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/nyt_bestsellers.jpg',
                    'subHtml' => 'Custom Form UI for specific tasks'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/view_order.jpg',
                    'subHtml' => 'Combines many different business processes. e.g. order management'
                ),
                array(
                    'src' => $imagePath . 'thereadingroom/infrastructure.jpg',
                    'subHtml' => 'Core infrastructure tasks are also available'
                )
            ),
        ),
        'vicalvi' => array(
            'alias' => 'vicalvi',
            'title' => 'Vicalvi Contract',
            'description' => 'High-end flooring store in London, England',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Ionize CMS',
                'CodeIgniter',
                'PHP',
                'MySQL',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Vicalvi.eu is a multi-lingual responsive product gallery website powered by CMS platform.',
                'links' => array(
                    'more' => array(),
                    'visit' => array(
                        'url' => 'http://www.vicalvi.eu'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/vicalvi/homepage.jpg',
                    'subHtml' => 'Vicalvi home page'
                ),
                array(
                    'src' => 'images/portfolio/vicalvi/collections.jpg',
                    'subHtml' => 'Product collections'
                ),
                array(
                    'src' => 'images/portfolio/vicalvi/collection.jpg',
                    'subHtml' => 'Individual collection page'
                ),
                array(
                    'src' => 'images/portfolio/vicalvi/mobile.jpg',
                    'subHtml' => 'Responsive views of each page'
                ),
                array(
                    'src' => 'images/portfolio/vicalvi/admin_2.jpg',
                    'subHtml' => 'CMS section - Managing image content from CMS'
                ),
                array(
                    'src' => 'images/portfolio/vicalvi/admin_1.jpg',
                    'subHtml' => 'All content is multilingual and can be changed from CMS'
                )
            ),
        ),
        'timer' => array(
            'alias' => 'timer',
            'title' => 'Timer',
            'description' => 'Minimal Online Timer in your Browser Tab',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'VueJS'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Minimal Online Timer in your Browser Tab.',
                'links' => array(
                    'github' => array(
                        'url' => 'https://david-lobo.github.io/Timer/dist/'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/timer/page1.png',
                    'subHtml' => 'Simple timer application'
                )
            ),
        ),
        'readinglist' => array(
            'alias' => 'readinglist',
            'title' => 'Reading List',
            'description' => 'iOS app for people to create reading lists',
            'categories' => array(
                'all',
                'mobile'
            ),
            'skills' => array(
                'Objective-C',
                'Xcode',
                'Cocoa Pods',
                'Google API',
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'iOS development in Xcode and Objective-C',
                'links' => array(
                    'github' => array(
                        'url' => 'https://bitbucket.org/oldlobster/readinglist'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/readinglist/iphone_5s_1.png',
                    'subHtml' => 'Reading list to track your books'
                ),
                array(
                    'src' => 'images/portfolio/readinglist/iphone_5s_2.png',
                    'subHtml' => 'Search for any book'
                ),
                array(
                    'src' => 'images/portfolio/readinglist/iphone_5s_3.png',
                    'subHtml' => 'Easily add to your reading list'
                ),
                array(
                    'src' => 'images/portfolio/readinglist/iphone_5s_4.png',
                    'subHtml' => 'View book info and mark as completed'
                )
            ),
        ),
        'myfooty' => array(
            'alias' => 'myfooty',
            'title' => 'MyFooty',
            'description' => 'Check the latest football fixtures and TV listings',
            'categories' => array(
                'all',
                'mobile'
            ),
            'skills' => array(
                'Objective-C',
                'Xcode',
                'Cocoa Pods',
                'Laravel',
                'PHP'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'iOS development in Xcode and Objective-C',
                'links' => array(
                    'visit' => array(
                        'url' => 'http://myfooty.co.uk/'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/myfooty/iphone_5s_1.png',
                    'subHtml' => 'MyFooty is a free iOS app for football fans'
                ),
                array(
                    'src' => 'images/portfolio/myfooty/iphone_5s_2.png',
                    'subHtml' => 'Choose your favourite team'
                ),
                array(
                    'src' => 'images/portfolio/myfooty/iphone_5s_3.png',
                    'subHtml' => 'Check your clubs latest fixtures and TV/Radio listings'
                ),
                array(
                    'src' => 'images/portfolio/myfooty/iphone_5s_4.png',
                    'subHtml' => 'Follow all other Premier League clubs too!'
                )
            ),
        ),
        'bayer' => array(
            'alias' => 'bayer',
            'title' => 'Bayer Animal Health Webinars',
            'description' => 'Portal for vets to host webinars for training.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Zend',
                'PHP',
                'MySQL',
                'Flex'

            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Custom site to host monthly live webinars as well as on-demand video, audio and PDF training materials.',
                'links' => array()
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/bayer/large_1.jpg',
                    'subHtml' => 'Registration to allow for data capture'
                ),
                array(
                    'src' => 'images/portfolio/bayer/large_2.jpg',
                    'subHtml' => 'Homepage including user polling'
                ),
                array(
                    'src' => 'images/portfolio/bayer/large_3.jpg',
                    'subHtml' => 'Live and On-demand webinars'
                ),
                array(
                    'src' => 'images/portfolio/bayer/large_4.jpg',
                    'subHtml' => 'On-demand content is archived'
                )
            ),
        ),
        'citrusandcocoa' => array(
            'alias' => 'citrusandcocoa',
            'title' => 'Citrus & Cocoa',
            'description' => 'Family restaurant offering healthy and locally sourced food.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Wordpress',
                'PHP',
                'MySQL',
                'Bootstrap'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Citrus & Cocoa is a Wordpress site with custom theme. ',
                'links' => array()
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/citrusandcocoa/homepage.jpg',
                    'subHtml' => 'Citrus &amp; Cocoa home - using custom post types'
                ),
                array(
                    'src' => 'images/portfolio/citrusandcocoa/gallery.jpg',
                    'subHtml' => 'Gallery section '
                ),
                array(
                    'src' => 'images/portfolio/citrusandcocoa/contact.jpg',
                    'subHtml' => 'Contact page'
                )
            ),
        ),
        'ariescleaning' => array(
            'alias' => 'ariescleaning',
            'title' => 'Aries Cleaning',
            'description' => 'Domestic and Commercial Cleaning Services',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Bootstrap',
                'HTML5',
                'JQuery',
                'Photoshop'

            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Responsive onepage site providiing information on their services and prices.',
                'links' => array(
                    'visit' => array(
                        'url' => 'http://www.ariescleaning.co.uk'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/ariescleaning/large_1.jpg',
                    'subHtml' => 'Home section desktop view'
                ),
                array(
                    'src' => 'images/portfolio/ariescleaning/large_2.jpg',
                    'subHtml' => 'Location section desktop view'
                ),
                array(
                    'src' => 'images/portfolio/ariescleaning/large_3.jpg',
                    'subHtml' => 'Home section mobile view'
                ),
                array(
                    'src' => 'images/portfolio/ariescleaning/large_4.jpg',
                    'subHtml' => 'Menu on responsive view'
                )
            ),
        ),
        'studiotalk' => array(
            'alias' => 'studiotalk',
            'title' => 'Studiotalk CMS',
            'description' => 'Platform for broadcasting live video and webTV shows.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Zend',
                'PHP',
                'MySQL',

            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Custom CMS application for uploading to StudioTalk.tv, BroadcastExchange.tv and other portals.',
                'links' => array()
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/studiotalk/large_1.jpg',
                    'subHtml' => 'AJAX loaded content listing, with search and sort'
                ),
                array(
                    'src' => 'images/portfolio/studiotalk/large_2.jpg',
                    'subHtml' => 'Edit of all content details'
                ),
                array(
                    'src' => 'images/portfolio/studiotalk/large_3.jpg',
                    'subHtml' => 'HTML editor using TinyMCE'
                ),
                array(
                    'src' => 'images/portfolio/studiotalk/large_4.jpg',
                    'subHtml' => 'Upload and resize of images'
                ),
                array(
                    'src' => 'images/portfolio/studiotalk/large_5.jpg',
                    'subHtml' => 'Embedded video from Youtube'
                ),
                array(
                    'src' => 'images/portfolio/studiotalk/large_6.jpg',
                    'subHtml' => 'Upload video/audio files using YUI Uploader'
                )
            ),
        ),
        'angryangels' => array(
            'alias' => 'angryangels',
            'title' => 'Angry Angels',
            'description' => 'AngryAngels is a brand within Start-Rite shoes',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'HTML',
                'JQuery',
                'CSS',
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Microsite for the Angry Angels dance team with with videos and links to buy for the dance shoes.',
                'links' => array()
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/angryangels/large_1.jpg',
                    'subHtml' => 'AngryAngels homepage with polling feature'
                ),
                array(
                    'src' => 'images/portfolio/angryangels/large_2.jpg',
                    'subHtml' => 'Product carousel with links to buy'
                ),
                array(
                    'src' => 'images/portfolio/angryangels/large_3.jpg',
                    'subHtml' => 'On-demand dance videos'
                )
            ),
        ),
        'goldbutton' => array(
            'alias' => 'goldbutton',
            'title' => 'Goldbutton',
            'description' => 'Website selling exclusive men\'s clothing.',
            'categories' => array(
                'all',
                'web'
            ),
            'skills' => array(
                'Magento',
                'HTML',
                'JQuery',
                'CSS',
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'Magento site theme with minimal customisation.',
                'links' => array()
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/goldbutton/large_1.jpg',
                    'subHtml' => 'Goldbutton custom home page'
                ),
                array(
                    'src' => 'images/portfolio/goldbutton/large_2.jpg',
                    'subHtml' => 'Product listing by category'
                ),
                array(
                    'src' => 'images/portfolio/goldbutton/large_3.jpg',
                    'subHtml' => 'Product page'
                )
            ),
        ),
        'toptunes' => array(
            'alias' => 'toptunes',
            'title' => 'TopTunes',
            'description' => 'List and preview the top 10 songs from iTunes UK',
            'categories' => array(
                'all',
                'mobile'
            ),
            'skills' => array(
                'Swift',
                'Xcode',
                'Cocoa Pods',
                'AV Foundation'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'iOS development in Xcode and Swift',
                'links' => array(
                    'github' => array(
                        'url' => 'https://github.com/david-lobo/TopTunes'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/toptunes/iphone_5s.png',
                    'subHtml' => 'Preview iTunes UK top 10 songs'
                )
            ),
        ),
        'pitchperfect' => array(
            'alias' => 'pitchperfect',
            'title' => 'PitchPerfect',
            'description' => ' Records audio message and plays back with added sound effect.',
            'categories' => array(
                'all',
                'mobile'
            ),
            'skills' => array(
                'Swift',
                'Xcode',
                'Cocoa Pods',
                'AV Foundation'
            ),
            'overlay' => array(
                'title' => 'What I did',
                'description' => 'iOS development in Xcode and Swift',
                'links' => array(
                    'github' => array(
                        'url' => 'https://github.com/david-lobo/PitchPerfect'
                    )
                )
            ),
            'gallery' => array(
                array(
                    'src' => 'images/portfolio/pitchperfect/iphone_5s_1.png',
                    'subHtml' => 'Record a message with your voice'
                ),
                array(
                    'src' => 'images/portfolio/pitchperfect/iphone_5s_2.png',
                    'subHtml' => 'Playback the message with novelty sound effects'
                )
            ),
        ),
    );

    $dir = DIRECTORY_SEPARATOR;
    foreach ($portfolio as $key => $value) {
        $portfolio[$key]['banner'] = $imagePath . $dir . 'banners' . $dir . $key . '.jpg';
    }

    return $portfolio;
}
