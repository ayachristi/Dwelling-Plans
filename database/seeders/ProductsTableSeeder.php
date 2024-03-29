<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        DB::table('products')->insert(array(
            0 =>
            array(
                'product_id' => 1,
                'storey_id' => 1,
                'design' => 'Modern Architecture',
                'description' => 'High ceilings and expansive windows maximize natural light and ventilation, creating a bright and airy interior.',
                'lot_area' => '90sqm',
                'image_3d' => '2024020602040000001s_90sqm_pers.jpg',
                'floor_plan_image' => '2024020602040000001s_90sqm_fp.jpg',
                'interior_image' => '2024020602040000001s_90sqm_int.webp',
                'title' => 'Storey 1 Bedroom Residential House',
            ),
            1 =>
            array(
                'product_id' => 2,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'The layout of the house is designed to be flexible and adaptable to the changing needs of the occupants. Open floor plans, movable partitions, and multifunctional spaces accommodate various lifestyle preferences and future modifications.',
                'lot_area' => '226sqm',
                'image_3d' => '2024020513210000001s_226sqm_pers.jpg',
                'floor_plan_image' => '2024020513210000001s_226sqm_fp.jpg',
                'interior_image' => '2024020513210000001s_226sqm_int.webp',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            2 =>
            array(
                'product_id' => 3,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'The house incorporate sustainable design principles such as energy-efficient appliances, LED lighting, and insulation to reduce energy consumption and minimize environmental impact. Additionally, low-maintenance landscaping and water-saving fixtures contribute to sustainability and conservation efforts.',
                'lot_area' => '226sqm',
                'image_3d' => '2024020513280000002s_21sqm_pers.jpg',
                'floor_plan_image' => '2024020513280000002s_45sqm_fp.webp',
                'interior_image' => '2024020513280000002s_45sqm_int.webp',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            3 =>
            array(
                'product_id' => 4,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'This 3 storey, 5 bedroom residential house seamlessly blends contemporary design with traditional charm. Its exterior showcases a harmonious mix of materials, including brick, stone, wood, and stucco, while large windows flood the interior with natural light and offer picturesque views. Upon entering, a grand foyer sets the stage for the elegant living spaces, including formal and family rooms ideal for entertaining and relaxation.',
                'lot_area' => '150sqm',
                'image_3d' => '2024020513310000003s_150sqm_pers.jpg',
                'floor_plan_image' => '2024020513310000003s_150sqm_fp.webp',
                'interior_image' => '2024020513310000003s_150sqm_int.webp',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
            4 =>
            array(
                'product_id' => 5,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'A two-storey residential house spanning 36 square meters presents a harmonious blend of modern design and functional living spaces. The exterior boasts clean lines, complemented by a mix of materials such as brick, wood, and stucco, while large windows flood the interior with natural light and provide scenic views. The ground floor features an open-plan layout with a spacious living room, dining area, and modern kitchen equipped with high-end appliances and ample storage.
',
                'lot_area' => '36sqm',
                'image_3d' => '2024020513540000002s_36sqm_pers.webp',
                'floor_plan_image' => '2024020513540000002s_36sqm_fp.jpg',
                'interior_image' => '2024020513540000002s_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            5 =>
            array(
                'product_id' => 6,
                'storey_id' => 2,
                'design' => 'Minimalist Architecture',
                'description' => 'A minimalist two-story, two-bedroom residential home emphasizes simplicity, utility, and elegance in its architecture. The façade has clean lines, geometric shapes, and a restrained color palette, producing an air of delicate advancement. Inside, the minimalist approach continues with natural light and provide a sense of spaciousness. The living room is the home\'s heart, easily connected to the dining area and modern kitchen, which radiates simplicity with sleek cabinetry, and simple fixtures.',
                'lot_area' => '54sqm',
                'image_3d' => '2024020513560000002s_51sqm_pers.jpg',
                'floor_plan_image' => '2024020513560000002s_51sqm_fp.jpg',
                'interior_image' => '2024020513560000002s_51sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            6 =>
            array(
                'product_id' => 7,
                'storey_id' => 3,
                'design' => 'Modern Architecture',
                'description' => 'Modern design elements such as clean lines, minimalistic decor, and high-quality materials.',
                'lot_area' => '54sqm',
                'image_3d' => '2024020513570000002s_180sqm_pers1.jpg',
                'floor_plan_image' => '2024020513570000002s_180sqm_pers.jpg',
                'interior_image' => '2024020513570000002s_180sqm_int.jpg',
                'title' => 'Storey 3 Bedroom Residential House',
            ),
            7 =>
            array(
                'product_id' => 8,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'A contemporary 2 Storey, 4 Bedroom residential home emphasizes modern living with its simplified style and functional layout. The façade features clean lines and a variety of materials, including concrete, glass, and wood, resulting in an eye-catching facade that merges effortlessly with its surroundings. An open-concept living space on the main floor provides fluidity and mobility, combining the living room, dining area, and kitchen to create a single focal point for daily activities.  Basic Features Living Area: 1 Toilet & Baths: 4 Kitchen: 1 Dining Area: 1 Carport: 2  Dimension 10mx15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020514130000002s_250sqm_pers.jpg',
                'floor_plan_image' => '2024020514130000002s_250sqm_fp.jpg',
                'interior_image' => '2024020514130000002s_250sqm_int.jpg',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            8 =>
            array(
                'product_id' => 9,
                'storey_id' => 3,
                'design' => 'Contemporary Architecture',
                'description' => 'A two-story, 25-bedroom dormitory spanning 300 square meters offers a spacious and functional living space tailored for communal living arrangements. The exterior presents a robust and utilitarian design, optimized for durability and efficiency. Inside, the ground floor encompasses communal areas such as a large common room or lounge, a communal kitchen, dining facilities, and possibly recreational spaces for socializing and relaxation. The upper floor hosts the dormitory\'s 25 bedrooms, each designed to provide comfortable and private accommodations for residents. Bedrooms may vary in size but are generally equipped with basic furnishings such as beds, storage units, and study areas. Shared bathroom facilities are typically provided on each floor for residents\' convenience. With its efficient layout and ample living space, this two-story dormitory offers a practical and affordable housing solution for students, travelers, or individuals seeking communal living arrangements.  Basic Features Living Area: 1 Toilet & Baths: 23 Kitchen: 2 Dining Area: 2 Carport: 5  Dimension 10mx30m',
                'lot_area' => '300sqm',
                'image_3d' => '2024020514140000002s_300sqm_pers.jpg',
                'floor_plan_image' => '2024020514140000002s_300sqm_fp.jpg',
                'interior_image' => '2024020514140000002s_300sqm_int.jpg',
                'title' => 'Storey 25 Bedroom Dormitory',
            ),
            9 =>
            array(
                'product_id' => 10,
                'storey_id' => 1,
                'design' => 'Minimalist Architecture',
                'description' => 'Efficient floor plan maximizing every square meter of space. Thoughtful design elements that enhance both functionality and aesthetics. Quality materials and finishes are chosen for their durability and visual appeal. Outdoor space, such as a small patio or garden area, extending the living area outdoors.  Basic Features Living Area: 1 Toilet & Baths: 1 Kitchen: 1 Dining Area: 1 Carport: 1  Dimension 10mx7m',
                'lot_area' => '70sqm',
                'image_3d' => '2024020514160000002s_Loft_pers.png',
                'floor_plan_image' => '2024020514160000002s_Loft_fp.png',
                'interior_image' => '2024020514160000002s_Loft_int.png',
                'title' => 'Storey with Loft Residential House',
            ),
            10 =>
            array(
                'product_id' => 11,
                'storey_id' => 1,
                'design' => 'Modern Architecture',
                'description' => 'The interior is made bright and open by maximizing natural light and ventilation through high ceilings and large windows. Energy-saving lighting, insulation, and appliances lower utility bills and promote sustainability.  Basic Features Living Area: 1 Baths : 1 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension 6mx15m  Storey 1 Bedroom Residential House',
                'lot_area' => '70sqm',
                'image_3d' => '2024020514320000001_9_1s_90sqm_fp_pers.jpg',
                'floor_plan_image' => '2024020514320000001_9_1s_90sqm_fp.jpg',
                'interior_image' => '2024020514320000001_9_1s_90sqm_fp_int.jpg',
                'title' => 'Storey 1 Bedroom Residential House',
            ),
            11 =>
            array(
                'product_id' => 12,
                'storey_id' => 1,
                'design' => 'Contemporary Architecture',
                'description' => 'A setting which is spacious and bright is produced by high ceilings and large windows, which enhance natural light and ventilation. In addition to lowering power costs, energy-efficient lighting, insulation, and appliances promote sustainability.  Basic Features Living Area: 1 Baths : 1 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension 6mx15m',
                'lot_area' => '90sqm',
                'image_3d' => '2024020514340000001_8_1s_90sqm_pers.jpg',
                'floor_plan_image' => '2024020514340000001_8_1s_90sqm_fp.jpg',
                'interior_image' => '2024020514340000001_8_1s_90sqm_int.jpg',
                'title' => 'Storey 1 Bedroom Residential House',
            ),
            12 =>
            array(
                'product_id' => 13,
                'storey_id' => 1,
                'design' => 'Contemporary Architecture',
                'description' => 'Maximizing natural light and ventilation, the design incorporates high ceilings and expansive windows, creating an interior that is both bright and airy. Sustainability is prioritized through the inclusion of energy-efficient appliances, lighting, and insulation, effectively reducing utility costs.  Basic Features Living Area: 1 Baths : 1 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension 6mx15m',
                'lot_area' => '90sqm',
                'image_3d' => '2024020514400000001_7_1s_90sqm_pers.jpg',
                'floor_plan_image' => '2024020514400000001_7_1s_90sqm_fp.jpg',
                'interior_image' => '2024020514400000001_7_1s_90sqm_int.avif',
                'title' => 'Storey 1 Bedroom Residential House',
            ),
            13 =>
            array(
                'product_id' => 14,
                'storey_id' => 1,
                'design' => 'Modern Architecture',
                'description' => 'The interior is made bright and open by maximizing natural light and ventilation through high ceilings and large windows.
Energy-saving lighting, insulation, and appliances lower utility bills and promote sustainability.

Basic Features
Living Area: 1
Baths : 1
Carport: 1
Kitchen: 1
Dining Area: 1

Dimension
6mx15m

Storey 1 Bedroom Residential House
',
                'lot_area' => '90sqm',
                'image_3d' => '2024020601150000001_6_1s_90sqm_pers.jpg',
                'floor_plan_image' => '2024020601150000001_6_1s_90sqm_fp.jpg',
                'interior_image' => '2024020601150000001_6_1s_90sqm_int.jpg',
                'title' => 'Storey 1 Bedroom Residential House',
            ),
            14 =>
            array(
                'product_id' => 15,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'A setting which is spacious and bright is produced by high ceilings and large windows, which enhance natural light and ventilation.
In addition to lowering power costs, energy-efficient lighting, insulation, and appliances promote sustainability.

Basic Features
Living Area: 1
Baths : 1
Carport: 1
Kitchen: 1
Dining Area: 1

Dimension
6mx15m
',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601170000002s_5_36sqm_pers.webp',
                'floor_plan_image' => '2024020601170000002s_5_36sqm_fp.jpg',
                'interior_image' => '2024020601170000002s_5_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            15 =>
            array(
                'product_id' => 16,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'This two-storey residential property, measuring 36 square meters, expertly integrates contemporary design elements with practical living areas. Large windows bring in an abundance of natural light and provide picturesque views, while the façade is designed with clean lines and a blend of brick, wood, and stucco. The ground floor features an open concept layout with a large living room, dining area, and modern kitchen that has plenty of storage and high-end appliances.  Basic Features Living Area: 1 Toilet & Baths: 2 Kitchen: 1 Dining Area: 1  Dimension 9mx4m',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601180000002s_4_36sqm_pers.jpg',
                'floor_plan_image' => '2024020601180000002s_4_36sqm_fp.jpg',
                'interior_image' => '2024020601180000002s_4_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            16 =>
            array(
                'product_id' => 17,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'This 36-square-meter, two-storey residential property is characterized by a beautiful blend of modern architecture and functional living areas. Clean lines and a blend of materials, including wood, stucco, and brick, are featured on the outside. Large windows let in enough of natural light and offer beautiful views. The ground floor has an open concept design with a large living room, dining area, and contemporary kitchen furnished with lots of storage.  Basic Features Living Area: 1 Toilet & Baths: 2 Kitchen: 1 Dining Area: 1  Dimension 9mx4m',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601190000002s_3_36sqm_pers.webp',
                'floor_plan_image' => '2024020601190000002s_3_36sqm_fp.jpg',
                'interior_image' => '2024020601190000002s_3_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            17 =>
            array(
                'product_id' => 18,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'This 36-square-meter, two-storey home offers an incredible blend of contemporary architecture and practical living spaces. The outside is designed with simple lines and a combination of brick, stucco, and wood. Big windows provide lovely vistas and plenty natural light. The ground floor features an open concept layout with a sizable living room, dining area, and modern kitchen that is well-stocked with cabinets.  Basic Features Living Area: 1 Toilet & Baths: 2 Kitchen: 1 Dining Area: 1  Dimension 9mx4m',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601200000002s_2_36sqm_pers.webp',
                'floor_plan_image' => '2024020601200000002s_2_36sqm_fp.jpg',
                'interior_image' => '2024020601200000002s_2_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            18 =>
            array(
                'product_id' => 19,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'Situated on a well-landscaped plot, the residence radiates a sense of elegance, with carefully chosen materials and architectural elements harmonizing to create a modern yet inviting atmosphere.  Basic Features Living Area: 1 Toilet & Baths: 2 Kitchen: 1 Dining Area: 1  Dimension 9mx4m',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601220000002s_1_36sqm_pers.webp',
                'floor_plan_image' => '2024020601220000002s_1_36sqm_fp.jpg',
                'interior_image' => '2024020601220000002s_1_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            19 =>
            array(
                'product_id' => 20,
                'storey_id' => 2,
                'design' => 'Contemporary Architecture',
                'description' => 'The stunning combination of contemporary architecture and practical living spaces characterizes this 36-square-meter, two-storey residential house. The external design is a combination of brick, stucco, and wood with clean lines. Large windows provide stunning vistas and plenty natural light. With a spacious living room, dining area, and modern kitchen outfitted with ample storage, the ground level offers an open concept layout.  Basic Features Living Area: 1 Toilet & Baths: 2 Kitchen: 1 Dining Area: 1  Dimension 9mx4m',
                'lot_area' => '36sqm',
                'image_3d' => '2024020601230000002s_6_36sqm_pers.webp',
                'floor_plan_image' => '2024020601230000002s_6_36sqm_fp.jpg',
                'interior_image' => '2024020601230000002s_6_36sqm_int.jpg',
                'title' => 'Storey 2 Bedroom Residential House',
            ),
            20 =>
            array(
                'product_id' => 21,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'A contemporary 2-storey, 4-bedroom residential home emphasizes modern living with its simplified style and functional layout. The façade features clean lines and a variety of materials, including concrete, glass, and wood, resulting in an eye-catching facade that merges effortlessly with its surroundings. The open-concept living space on the main floor provides fluidity and mobility, combining the living room, dining area, and kitchen to create a single focal point for daily activities.  Basic Features: Living Area: 1 Toilet & Baths: 4 Kitchen: 1 Dining Area: 1 Carport: 2  Dimension: 10m x 15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020601250000002s_1_5_250sqm_pers.jpg',
                'floor_plan_image' => '2024020601250000002s_1_5_250sqm_fp.jpg',
                'interior_image' => '2024020601250000002s_1_5_250sqm_int.webp',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            21 =>
            array(
                'product_id' => 22,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'This two-story, three-bedroom residential home highlights simplicity and utility in its design, perfectly capturing the essence of modern life. The outside features a modern front with straight lines and a combination of materials—wood, glass, and concrete—that visually pops against the surrounding landscape. The living room, dining area, and kitchen are all seamlessly integrated into an open-concept arrangement on the main floor, creating a central hub for daily activity.  Basic Features: Living Area: 1 Toilet & Baths: 4 Kitchen: 1 Dining Area: 1 Carport: 2  Dimension: 10m x 15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020601260000002s_1_4_250sqm_pers.webp',
                'floor_plan_image' => '2024020601260000002s_1_4_250sqm_fp.jpg',
                'interior_image' => '2024020601260000002s_1_4_250sqm_int.avif',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            22 =>
            array(
                'product_id' => 23,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'This two-storey, three-bedroom residential property emphasizes modern living with a simple design and useful layout. The facade combines glass, wood, and concrete to create a visually pleasing exterior that blends in seamlessly with its surroundings. It also features clean lines. The main floor\'s open-concept living area unifies the dining room, kitchen, and living room to provide a focal point for everyday activity.  Basic Features: Living Area: 1 Toilet & Baths: 4 Kitchen: 1 Dining Area: 1 Carport: 2  Dimension: 10m x 15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020601270000002s_1_3_250sqm_pers.jpg',
                'floor_plan_image' => '2024020601270000002s_1_3_250sqm_fp.jpg',
                'interior_image' => '2024020601270000002s_1_3_250sqm_int.jpg',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            23 =>
            array(
                'product_id' => 24,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'This elegant, two-storey, three-bedroom home emphasizes modern living and is designed with simplicity and functionality in consideration. The facade\'s captivating style mixes in perfectly with its surroundings thanks to its combination of concrete, glass, and wood elements, as well as its clean, simple lines. The living room, dining area, and kitchen are all integrated into the open-concept main floor, which serves as a focal point for daily activities.

Basic Features:
Living Area: 1
Toilet & Baths: 4
Kitchen: 1
Dining Area: 1
Carport: 2

Dimension: 10m x 15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020601280000002s_1_2_250sqm_pers.jpg',
                'floor_plan_image' => '2024020601280000002s_1_2_250sqm_fp.jpg',
                'interior_image' => '2024020601280000002s_1_2_250sqm_int.jpg',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            24 =>
            array(
                'product_id' => 25,
                'storey_id' => 4,
                'design' => 'Contemporary Architecture',
                'description' => 'This two-storey, three-bedroom residential home emphasizes practicality and simplicity in its design, providing a window into contemporary living. The facade\'s many elements, such as concrete, glass, and wood, combined with its simple forms create an alluring facade that blends in perfectly with the surrounding landscape. The main floor\'s open-concept living area comprises the kitchen, dining area, and living room, creating a focal point for everyday activities.  Basic Features: Living Area: 1 Toilet & Baths: 4 Kitchen: 1 Dining Area: 1 Carport: 2  Dimension: 10m x 15m',
                'lot_area' => '250sqm',
                'image_3d' => '2024020601290000002s_1_1_250sqm_pers.webp',
                'floor_plan_image' => '2024020601290000002s_1_1_250sqm_fp.jpg',
                'interior_image' => '2024020601290000002s_1_1_250sqm_int.jpg',
                'title' => 'Storey 4 Bedroom Residential House',
            ),
            25 =>
            array(
                'product_id' => 26,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'This three-storey, five-bedroom residential dwelling seamlessly integrates modern design elements with classical allure. The exterior presents a cohesive amalgamation of architectural materials, incorporating brick, stone, wood, and stucco, while expansive windows saturate the interior with natural light, offering panoramic views. Upon entry, a majestic foyer establishes the backdrop for sophisticated living spaces, encompassing both formal and family rooms, perfect for both entertainment and repose.  Basic Features: Living Area: 1 Toilet & Baths: 6 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension: 10m x 5m',
                'lot_area' => '150sqm',
                'image_3d' => '2024020601300000003s_5_150sqm_pers.jpg',
                'floor_plan_image' => '2024020601300000003s_5_150sqm_fp.webp',
                'interior_image' => '2024020601300000003s_5_150sqm_int.jpg',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
            26 =>
            array(
                'product_id' => 27,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'A residential house spanning three stories and offering five bedrooms seamlessly melds contemporary aesthetics with timeless charm. The exterior showcases a harmonious fusion of architectural elements, incorporating brick, stone, wood, and stucco, while expansive windows flood the interiors with natural light, framing scenic views. Upon entering, an opulent foyer establishes a captivating setting for refined living spaces, encompassing both formal and family rooms, ideal for both entertainment and relaxation.  Basic Features: Living Area: 1 Toilet & Baths: 6 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension: 10m x 5m',
                'lot_area' => '150sqm',
                'image_3d' => '2024020601310000003s_4_150sqm_pers.jpg',
                'floor_plan_image' => '2024020601310000003s_4_150sqm_fp.webp',
                'interior_image' => '2024020601310000003s_4_150sqm_int.jpg',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
            27 =>
            array(
                'product_id' => 28,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'This three-storey residential abode, boasting five bedrooms, artfully blends contemporary architectural design with the enduring charm of tradition. Its exterior exhibits a seamless integration of various architectural materials, including brick, stone, wood, and stucco, while generous windows bathe the interior in natural light and provide captivating views. Upon entry, an expansive foyer serves as a sophisticated introduction to the graceful living spaces, featuring formal and family rooms designed for both entertainment and relaxation.  Basic Features: Living Area: 1 Toilet & Baths: 6 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension: 10m x 5m',
                'lot_area' => '150sqm',
                'image_3d' => '2024020601330000003s_3_150sqm_pers.jpg',
                'floor_plan_image' => '2024020601330000003s_3_150sqm_fp.webp',
                'interior_image' => '2024020601330000003s_3_150sqm_int.webp',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
            28 =>
            array(
                'product_id' => 29,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'This residential dwelling, spanning three stories and offering five bedrooms, seamlessly marries contemporary architectural design with a touch of traditional allure. The exterior harmonizes a blend of architectural materials, including brick, stone, wood, and stucco, while expansive windows saturate the interiors with natural light, framing picturesque views. Upon entry, an impressive foyer sets the stage for refined living spaces, encompassing both formal and family rooms, ideal for both entertainment and repose.  Basic Features: Living Area: 1 Toilet & Baths: 6 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension: 10m x 5m',
                'lot_area' => '150sqm',
                'image_3d' => '2024020601340000003s_2_150sqm_pers.jpg',
                'floor_plan_image' => '2024020601340000003s_2_150sqm_fp.webp',
                'interior_image' => '2024020601340000003s_2_150sqm_int.jpg',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
            29 =>
            array(
                'product_id' => 30,
                'storey_id' => 5,
                'design' => 'Modern Architecture',
                'description' => 'This three-storey, five-bedroom residential house seamlessly fuses contemporary architectural design with the timeless appeal of tradition. The exterior showcases a balanced amalgamation of architectural materials, featuring brick, stone, wood, and stucco, while expansive windows saturate the interior with natural light, providing idyllic views. Upon entry, a stately foyer serves as a sophisticated introduction to the elegant living spaces, comprising both formal and family rooms, catering to both entertainment and relaxation.  Basic Features: Living Area: 1 Toilet & Baths: 6 Carport: 1 Kitchen: 1 Dining Area: 1  Dimension: 10m x 5m',
                'lot_area' => '150sqm',
                'image_3d' => '2024020601350000003s_1_150sqm_pers.jpg',
                'floor_plan_image' => '2024020601350000003s_1_150sqm_fp.webp',
                'interior_image' => '2024020601350000003s_1_150sqm_int.png',
                'title' => 'Storey 5 Bedroom Residential House',
            ),
        ));
    }
}
