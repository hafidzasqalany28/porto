<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Example portfolios
        $portfolios = [
            [
                'title' => 'PLBN-SOTA',
                'description' => 'PLBN-SOTA is a web application designed to simplify the management process of PLBN Sota visitors using QR codes as a system for archiving visitor data. Visitors can log in using their username and password or register if they dont have an account. Registration data will be processed into a QR code with a unique ID. After logging in, visitors can view information about the days visit schedule. During their visit, visitors only need to show their QR code to the officers. Officers, upon logging in, can scan the QR codes of individual visitors or groups, and the system will display the success status of the scan. Admins can input officer data, input PLBN Sota information, and view and print visitor reports. Meanwhile, the Head can view and print PLBN Sota reports after logging into the website. This project uses the Laravel framework and several libraries such as Laravel/UI for authentication processes, AdminLTE for the admin backend, Simple-QRCode to generate barcodes/QR codes, tcpdf for download visitor report in PDF format, and Instascan for the camera scanning feature.',
                'image' => 'portfolio-1.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=9jo51nJrO0k',
                'website_link' => 'https://plbnsota.com/',
                'github_link' => 'https://github.com/Jaenulatif/plbn-sota',
                'category' => 'Web', // Adjust the category
            ],
            [
                'title' => 'YAMAI-ATID',
                'description' => 'Yamai-Atid is a web application designed to facilitate and educate visitors about the flora and fauna in Yamai-Atid Park. The project will implement an information system based on Quick Response Code (QR-Code), which redirects to Uniform Resource Locator (URL) addresses of web pages. This system aims to provide visitors with easy access to information about the flora and fauna in Yamai-Atid Park and enable the management to monitor collection data efficiently. The application includes an admin panel that allows administrators to input data about animals and plants, including general and local names, scientific names, English translations, biomes of each animal and plant, images, types, and additional information such as the quantity of flora and fauna in the park. Admins can generate QR codes containing URL details for each animal and plants information and download the created QR codes. This project is developed using the Laravel framework and several libraries, including Laravel/UI for authentication processes, AdminLTE for the admin backend, Simple-QRCode for generating barcodes/QR codes, TCPDF for downloading visitor reports in PDF format, and Instascan for the camera scanning feature.',
                'image' => 'portfolio-2.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=9jo51nJrO0k',
                'website_link' => 'https://yamai-atid.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/yamai-atid',
                'category' => 'Web', // Adjust the category
            ],
            [
                'title' => 'OMART',
                'description' => 'Developing an e-commerce platform that is not only interactive but also holistic, introducing standout features for customers, including easy access to product lists, promotions, and discounts, a secure payment system, and efficient shopping cart management. Customers are endowed with participatory capabilities in providing product reviews and executing return or replacement processes with the direct contact option through Omart customer service WhatsApp number. Meanwhile, for administrators, this system provides comprehensive management facilities, covering product management, promotions/discounts, product stock, monitoring of items sold, order management with successful payment notifications, sales reports presented in graphical form, and conversion to PDF format for completed orders. Additionally, administrators have full control over review management, ensuring the continuity of an advanced and satisfying online shopping experience. This project employs the Laravel framework in its development and utilizes several libraries such as Laravel/UI for authentication processes, AdminLTE for admin management, and Midtrans for the payment system.',
                'image' => 'portfolio-3.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=9jo51nJrO0k',
                'website_link' => 'https://finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/omart',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'CRM',
                'description' => 'The Sweet Potato CRM Project aims to provide an integrated solution for Farmers, Buyers, and Administrators within the sweet potato farming ecosystem. The Farmer menu displays information on products, promotions, and marketing reports, with notifications for out-of-stock items. The Manage Products and Promotions module facilitates the management of product and promotion lists, including the addition of new entities and notifications for expiring promotions. Buyers have a dashboard with product recommendations, stock notifications, and purchase history. The Search and View Products feature facilitates product search and information retrieval. Additionally, we have incorporated Income Graph, Total Products Sold, and Total Products Available features specifically for Farmers, with Administrators having access to all graphs to monitor collective performance. Administrators can also send out-of-stock notifications to Farmers, and the Notification Section manages notifications for stock and promotions approaching deadlines. The project employs technology and tools to create an efficient CRM environment within the sweet potato farming ecosystem, with the addition of graphical features for in-depth visual analysis of income and product availability at both individual and collective levels. This project utilizes the Laravel framework with several libraries, such as Laravel/UI for authentication processes, and AdminLTE for admin management.',
                'image' => 'portfolio-4.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=9jo51nJrO0k',
                'website_link' => 'https://crm-ubijalar.finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/CRM',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'MARO-BARBERSHOP',
                'description' => 'The Maro Barbershop Appointment Scheduling Project is created to provide a comprehensive user experience by offering various features, including online booking, reminder notifications, booking history, and online payment options for customers. Additionally, hairstylists have special access to manage booking schedules and complete services. Furthermore, the admin plays a crucial role in viewing and managing data, such as total customer accounts, available services, hairstylist accounts, booking counts, monthly revenue, and booking details. Admin also has the capability to perform CRUD operations for hairstylist, customer, and service data, providing full control in efficiently and seamlessly managing Maro Barbershop. This system is designed to deliver ease, efficiency, and an enhanced experience for all involved parties, accessible through mobile applications or websites for maximum flexibility. The project utilizes the Laravel framework in its development and incorporates several libraries such as Laravel/UI for authentication processes, AdminLTE for admin management, and Midtrans for the payment system.',
                'image' => 'portfolio-5.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=9jo51nJrO0k',
                'website_link' => 'https://maro-barbershop.finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/maro-barbershop',
                'category' => 'Web', // Adjust the category
            ],
            // Add more projects as needed
        ];

        // Insert portfolios into the database
        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
