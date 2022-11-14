<?php

use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->truncate();
        DB::table('hotel_description')->truncate();
        DB::table('amenities')->truncate();
        DB::table('amenities_description')->truncate();
        DB::table('amenities_to_hotels')->truncate();
        DB::table('facilities')->truncate();
        DB::table('facilities_description')->truncate();
        DB::table('facilities_to_hotels')->truncate();
        DB::table('services')->truncate();
        DB::table('services_description')->truncate();
        DB::table('services_to_hotels')->truncate();
        DB::table('recreational_activities')->truncate();
        DB::table('recreational_activities_description')->truncate();
        DB::table('recreational_activities_to_hotels')->truncate();
        DB::table('venue_access')->truncate();
        DB::table('venue_access_description')->truncate();
        DB::table('venue_access_to_hotels')->truncate();
        DB::table('equipments')->truncate();
        DB::table('equipments_description')->truncate();
        DB::table('equipments_to_hotels')->truncate();
        DB::table('meeting_space_floor_plans')->truncate();
        DB::table('hotel_rooms')->truncate();
        DB::table('hotel_rooms_description')->truncate();
        DB::table('guest_room_facilities')->truncate();
        DB::table('guest_room_facilities_description')->truncate();
        DB::table('guest_room_facilities_to_hotels')->truncate();
        DB::table('hotel_guest_rooms')->truncate();
        DB::table('hotel_guest_room_details')->truncate();
        DB::table('hotel_guest_room_details_description')->truncate();
        DB::table('resturant_bar')->truncate();
        DB::table('resturant_bar_description')->truncate();
        DB::table('nearby_places')->truncate();
        DB::table('hotel_gallery')->truncate();
        DB::table('tags')->truncate();
        DB::table('tags_description')->truncate();
        DB::table('tags_to_hotels')->truncate();
        DB::table('users_to_hotels')->truncate();
		
        DB::table('hotels')->insert([
            'id'             		 		=> '1',
			'slug'           		 		=> 'antis-hotel',
			'address'           	 		=> 'Sultanahmet Mah. Akbiyik Degirmeni Sok. No:98, Sultanahmet, Istanbul, Turkey, 34122',
            'city'     				 		=> 'Sultanahmet',
			'state'     			 		=> 'Istanbul',
			'zip'             		 		=> '34122',
			'space_meeting_room'     		=> '10',
			'space_meeting_space'    		=> '10',
            'space_guest_rooms'      		=> '500',
			'space_restuatrant_bars' 		=> '20',
			'space_chain_name'       		=> 'Paradise Hotels',
			'space_built_year'       		=> '2006',
			'space_total_meeting_space_area'=> '50,000 sq. ft.',
            'space_brand_name'     			=> 'Paradise Hotels',
			'space_renovation_year'     	=> '2018',
			'space_all_inclusive_hotel'     => 'Yes',
			'space_aaa_rating'           	=> '5',
			'space_trip_advisor_rating'     => '5',
            'total_meeting_space'     		=> '50,000 sq. ft.',
			'largest_room'             		=> '19,375 sq. ft.',
			'second_largest_room'           => '7,965 sq. ft.',
			'exhibit_space'          		=> '50,000 sq. ft.',
            'catering_service_image'     	=> 'catering-service-img.jpg',
			'terms_conditions'     			=> '1',
			'is_featured'     				=> '1',
			'created_by'     				=> '1',
		]);

        DB::table('hotel_description')->insert([
            'id'            	 => '1',
			'name'           	 => 'Antis Hotel',
			'catering_service'   => 'Phasellus at metus tempor, interdum libero in, pulvinar lectus. Nam congue justo at ultrices commodo. Sed nec venenatis mauris, a viverra elit. Sed nec pulvinar dolor. Mauris posuere dapibus sapien, non scelerisque neque. In hac habitasse platea dictumst. Mauris facilisis leo eu semper tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eu viverra neque. Sed mattis sodales ornare. Vivamus imperdiet magna sit amet ligula eleifend gravida. Proin quis volutpat augue. Nam consequat orci eget dictum consectetur. In auctor lectus tempor.',
            'hotel_id'     		 => '1',
			'language_id'     	 => '1',
        ]);

        DB::table('hotel_description')->insert([
            'id'            	 => '2',
			'name'           	 => 'Antis Hotel',
			'catering_service'           	 => 'Nam, pero teme tiempo, a veces gratis, se graduó de voleibol. Planificación de baloncesto pero solo por conveniencia. Pero no lo hizo venenatis mauris, un tirón de clientes. Pero no pulvinar dolor. Dapibus sapien mauris posuere, yo no, ni chocolate. El refinanciamiento. El león es siempre fácil la temporada de fútbol más grande. Nutrición residentes fútbol triste viejo y feo netus et malesuada hambre y pobreza. Fútbol o tirón más grande. Sin embargo, muchos miembros de la computadora. Vivamus imperdiet magna sit amet ligula eleifend gravida. A mitad de cualquier propaganda de fin de semana. Para la fotografía se ha mejorado la necesidad clínica. El autor se graduó tiempo.',
            'hotel_id'     		 => '1',
			'language_id'     	 => '2',
        ]);

        DB::table('hotel_description')->insert([
            'id'            	 => '3',
			'name'           	 => 'Antis Hotel',
			'catering_service'   => 'Nam, mas teme o tempo, às vezes de graça, formou-se no voleibol. Planejando o basquete, mas apenas por conveniência. Mas não venenatis mauris, a puxar clientes. Mas não pulvinar dolor. Dapibus sapien mauris posuere, eu não, nem chocolate. O refinanciamento. O leão é sempre fácil na maior temporada de futebol. Nutrição residentes futebol tristes velhos e feios netus et maleuada fome e pobreza. Maior futebol ou puxada. No entanto, muitos membros do computador. Vivamus imperdiet magna sit amet ligula eleifend gravida. No meio de qualquer propaganda de fim de semana. Para fotografia, a necessidade clínica foi aprimorada. O autor graduou-se em tempo.',
            'hotel_id'     		 => '1',
			'language_id'     	 => '3',
        ]);

        DB::table('amenities')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('amenities')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('amenities')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('amenities')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('amenities')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('amenities')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('amenities')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('amenities_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'amenity_id'     => '1',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'amenity_id'     => '1',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'amenity_id'     => '1',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'amenity_id'     => '2',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'amenity_id'     => '2',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'amenity_id'     => '2',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'amenity_id'     => '3',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'amenity_id'     => '3',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'amenity_id'     => '3',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'amenity_id'     => '4',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'amenity_id'     => '4',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'amenity_id'     => '4',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'amenity_id'     => '5',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'amenity_id'     => '5',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'amenity_id'     => '5',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'amenity_id'     => '6',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'amenity_id'     => '6',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'amenity_id'     => '6',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'amenity_id'     => '7',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'amenity_id'     => '7',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'amenity_id'     => '7',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'amenity_id'     => '8',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'amenity_id'     => '8',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'amenity_id'     => '8',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'amenity_id'     => '9',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'amenity_id'     => '9',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'amenity_id'     => '9',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'amenity_id'     => '10',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'amenity_id'     => '10',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'amenity_id'     => '10',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'amenity_id'     => '11',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'amenity_id'     => '11',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'amenity_id'     => '11',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'amenity_id'     => '12',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'amenity_id'     => '12',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'amenity_id'     => '12',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'amenity_id'     => '13',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'amenity_id'     => '13',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '3',
            'amenity_id'     => '13',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'amenity_id'     => '14',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'amenity_id'     => '14',
		]);

		DB::table('amenities_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'amenity_id'     => '14',
		]);

        DB::table('amenities_to_hotels')->insert([
            'id'             => '1',
			'amenity_id'     => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('amenities_to_hotels')->insert([
            'id'             => '2',
			'amenity_id'     => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('amenities_to_hotels')->insert([
            'id'             => '3',
			'amenity_id'     => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('amenities_to_hotels')->insert([
            'id'             => '4',
			'amenity_id'     => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('amenities_to_hotels')->insert([
            'id'             => '5',
			'amenity_id'     => '5',
			'hotel_id'       => '1',
        ]);

        DB::table('facilities')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('facilities')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('facilities')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('facilities')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('facilities')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('facilities')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('facilities')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('facilities_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'facility_id'     => '1',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'facility_id'     => '1',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'facility_id'     => '1',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'facility_id'     => '2',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'facility_id'     => '2',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'facility_id'     => '2',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'facility_id'     => '3',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'facility_id'     => '3',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'facility_id'     => '3',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'facility_id'     => '4',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'facility_id'     => '4',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'facility_id'     => '4',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'facility_id'     => '5',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'facility_id'     => '5',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'facility_id'     => '5',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'facility_id'     => '6',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'facility_id'     => '6',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'facility_id'     => '6',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'facility_id'     => '7',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'facility_id'     => '7',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'facility_id'     => '7',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'facility_id'     => '8',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'facility_id'     => '8',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'facility_id'     => '8',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'facility_id'     => '9',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'facility_id'     => '9',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'facility_id'     => '9',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'facility_id'     => '10',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'facility_id'     => '10',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'facility_id'     => '10',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'facility_id'     => '11',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'facility_id'     => '11',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'facility_id'     => '11',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'facility_id'     => '12',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'facility_id'     => '12',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'facility_id'     => '12',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'facility_id'     => '13',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'facility_id'     => '13',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '3',
            'facility_id'     => '13',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'facility_id'     => '14',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'facility_id'     => '14',
		]);

		DB::table('facilities_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'facility_id'     => '14',
		]);

        DB::table('facilities_to_hotels')->insert([
            'id'             => '1',
			'facility_id'    => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('facilities_to_hotels')->insert([
            'id'             => '2',
			'facility_id'    => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('facilities_to_hotels')->insert([
            'id'             => '3',
			'facility_id'    => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('facilities_to_hotels')->insert([
            'id'             => '4',
			'facility_id'    => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('facilities_to_hotels')->insert([
            'id'             => '5',
			'facility_id'    => '5',
			'hotel_id'       => '1',
        ]);

     
        DB::table('services')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('services')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('services')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('services')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('services')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('services')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('services')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('services_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'service_id'     => '1',
		]);

		DB::table('services_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'service_id'     => '1',
		]);

		DB::table('services_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'service_id'     => '1',
		]);

		DB::table('services_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'service_id'     => '2',
		]);

		DB::table('services_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'service_id'     => '2',
		]);

		DB::table('services_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'service_id'     => '2',
		]);

		DB::table('services_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'service_id'     => '3',
		]);

		DB::table('services_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'service_id'     => '3',
		]);

		DB::table('services_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'service_id'     => '3',
		]);

		DB::table('services_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'service_id'     => '4',
		]);

		DB::table('services_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'service_id'     => '4',
		]);

		DB::table('services_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'service_id'     => '4',
		]);

		DB::table('services_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'service_id'     => '5',
		]);

		DB::table('services_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'service_id'     => '5',
		]);

		DB::table('services_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'service_id'     => '5',
		]);

		DB::table('services_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'service_id'     => '6',
		]);

		DB::table('services_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'service_id'     => '6',
		]);

		DB::table('services_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'service_id'     => '6',
		]);

		DB::table('services_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'service_id'     => '7',
		]);

		DB::table('services_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'service_id'     => '7',
		]);

		DB::table('services_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'service_id'     => '7',
		]);

		DB::table('services_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'service_id'     => '8',
		]);

		DB::table('services_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'service_id'     => '8',
		]);

		DB::table('services_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'service_id'     => '8',
		]);

		DB::table('services_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'service_id'     => '9',
		]);

		DB::table('services_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'service_id'     => '9',
		]);

		DB::table('services_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'service_id'     => '9',
		]);

		DB::table('services_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'service_id'     => '10',
		]);

		DB::table('services_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'service_id'     => '10',
		]);

		DB::table('services_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'service_id'     => '10',
		]);

		DB::table('services_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'service_id'     => '11',
		]);

		DB::table('services_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'service_id'     => '11',
		]);

		DB::table('services_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'service_id'     => '11',
		]);

		DB::table('services_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'service_id'     => '12',
		]);

		DB::table('services_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'service_id'     => '12',
		]);

		DB::table('services_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'service_id'     => '12',
		]);

		DB::table('services_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'service_id'     => '13',
		]);

		DB::table('services_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'service_id'     => '13',
		]);

		DB::table('services_description')->insert([
            'id'             => '39',
			'name'           => 'Gluten Free Food',
			'language_id'    => '3',
            'service_id'     => '13',
		]);

		DB::table('services_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'service_id'     => '14',
		]);

		DB::table('services_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'service_id'     => '14',
		]);

		DB::table('services_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'service_id'     => '14',
		]);

        DB::table('services_to_hotels')->insert([
            'id'             => '1',
			'service_id'    => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('services_to_hotels')->insert([
            'id'             => '2',
			'service_id'    => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('services_to_hotels')->insert([
            'id'             => '3',
			'service_id'    => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('services_to_hotels')->insert([
            'id'             => '4',
			'service_id'    => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('services_to_hotels')->insert([
            'id'             => '5',
			'service_id'    => '5',
			'hotel_id'       => '1',
        ]);
      

         DB::table('recreational_activities')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('recreational_activities')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('recreational_activities')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('recreational_activities')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('recreational_activities')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('recreational_activities')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('recreational_activities')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('recreational_activities_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'activity_id'     => '1',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'activity_id'     => '1',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'activity_id'     => '1',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'activity_id'     => '2',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'activity_id'     => '2',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'activity_id'     => '2',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'activity_id'     => '3',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'activity_id'     => '3',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'activity_id'     => '3',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'activity_id'     => '4',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'activity_id'     => '4',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'activity_id'     => '4',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'activity_id'     => '5',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'activity_id'     => '5',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'activity_id'     => '5',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'activity_id'     => '6',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'activity_id'     => '6',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'activity_id'     => '6',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'activity_id'     => '7',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'activity_id'     => '7',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'activity_id'     => '7',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'activity_id'     => '8',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'activity_id'     => '8',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'activity_id'     => '8',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'activity_id'     => '9',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'activity_id'     => '9',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'activity_id'     => '9',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'activity_id'     => '10',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'activity_id'     => '10',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'activity_id'     => '10',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'activity_id'     => '11',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'activity_id'     => '11',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'activity_id'     => '11',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'activity_id'     => '12',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'activity_id'     => '12',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'activity_id'     => '12',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'activity_id'     => '13',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'activity_id'     => '13',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '3',
            'activity_id'     => '13',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'activity_id'     => '14',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'activity_id'     => '14',
		]);

		DB::table('recreational_activities_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'activity_id'     => '14',
		]);

        DB::table('recreational_activities_to_hotels')->insert([
            'id'             => '1',
			'activity_id'    => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('recreational_activities_to_hotels')->insert([
            'id'             => '2',
			'activity_id'    => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('recreational_activities_to_hotels')->insert([
            'id'             => '3',
			'activity_id'    => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('recreational_activities_to_hotels')->insert([
            'id'             => '4',
			'activity_id'    => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('recreational_activities_to_hotels')->insert([
            'id'             => '5',
			'activity_id'    => '5',
			'hotel_id'       => '1',
        ]);

        

        DB::table('venue_access')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('venue_access')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('venue_access')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('venue_access')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('venue_access')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('venue_access')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('venue_access')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('venue_access_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'venue_access_id'     => '1',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'venue_access_id'     => '1',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'venue_access_id'     => '1',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'venue_access_id'     => '2',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'venue_access_id'     => '2',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'venue_access_id'     => '2',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'venue_access_id'     => '3',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'venue_access_id'     => '3',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'venue_access_id'     => '3',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'venue_access_id'     => '4',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'venue_access_id'     => '4',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'venue_access_id'     => '4',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'venue_access_id'     => '5',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'venue_access_id'     => '5',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'venue_access_id'     => '5',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'venue_access_id'     => '6',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'venue_access_id'     => '6',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'venue_access_id'     => '6',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'venue_access_id'     => '7',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'venue_access_id'     => '7',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'venue_access_id'     => '7',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'venue_access_id'     => '8',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'venue_access_id'     => '8',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'venue_access_id'     => '8',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'venue_access_id'     => '9',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'venue_access_id'     => '9',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'venue_access_id'     => '9',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'venue_access_id'     => '10',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'venue_access_id'     => '10',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'venue_access_id'     => '10',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'venue_access_id'     => '11',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'venue_access_id'     => '11',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'venue_access_id'     => '11',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'venue_access_id'     => '12',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'venue_access_id'     => '12',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'venue_access_id'     => '12',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'venue_access_id'     => '13',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'venue_access_id'     => '13',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '2',
            'venue_access_id'     => '13',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '3',
            'venue_access_id'     => '14',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'venue_access_id'     => '14',
		]);

		DB::table('venue_access_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'venue_access_id'     => '14',
		]);

        DB::table('venue_access_to_hotels')->insert([
            'id'             => '1',
			'venue_access_id'    => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('venue_access_to_hotels')->insert([
            'id'             => '2',
			'venue_access_id'    => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('venue_access_to_hotels')->insert([
            'id'             => '3',
			'venue_access_id'    => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('venue_access_to_hotels')->insert([
            'id'             => '4',
			'venue_access_id'    => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('venue_access_to_hotels')->insert([
            'id'             => '5',
			'venue_access_id'    => '5',
			'hotel_id'       => '1',
        ]);


        DB::table('equipments')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('equipments')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('equipments')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('equipments')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('equipments')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('equipments')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('equipments')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('equipments_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'equipment_id'     => '1',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'equipment_id'     => '1',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'equipment_id'     => '1',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'equipment_id'     => '2',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'equipment_id'     => '2',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'equipment_id'     => '2',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'equipment_id'     => '3',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'equipment_id'     => '3',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'equipment_id'     => '3',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'equipment_id'     => '4',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'equipment_id'     => '4',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'equipment_id'     => '4',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'equipment_id'     => '5',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'equipment_id'     => '5',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'equipment_id'     => '5',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'equipment_id'     => '6',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'equipment_id'     => '6',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'equipment_id'     => '6',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'equipment_id'     => '7',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'equipment_id'     => '7',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'equipment_id'     => '7',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'equipment_id'     => '8',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'equipment_id'     => '8',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'equipment_id'     => '8',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'equipment_id'     => '9',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'equipment_id'     => '9',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'equipment_id'     => '9',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'equipment_id'     => '10',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'equipment_id'     => '10',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'equipment_id'     => '10',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'equipment_id'     => '11',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'equipment_id'     => '11',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'equipment_id'     => '11',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'equipment_id'     => '12',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'equipment_id'     => '12',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'equipment_id'     => '12',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'equipment_id'     => '13',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'equipment_id'     => '13',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '3',
            'equipment_id'     => '13',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'equipment_id'     => '14',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'equipment_id'     => '14',
		]);

		DB::table('equipments_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'equipment_id'     => '14',
		]);

        DB::table('equipments_to_hotels')->insert([
            'id'             => '1',
			'equipment_id'    => '1',
			'hotel_id'       => '1',
        ]);

        DB::table('equipments_to_hotels')->insert([
            'id'             => '2',
			'equipment_id'    => '2',
			'hotel_id'       => '1',
        ]);

        DB::table('equipments_to_hotels')->insert([
            'id'             => '3',
			'equipment_id'    => '3',
			'hotel_id'       => '1',
        ]);

        DB::table('equipments_to_hotels')->insert([
            'id'             => '4',
			'equipment_id'    => '4',
			'hotel_id'       => '1',
        ]);

        DB::table('equipments_to_hotels')->insert([
            'id'             => '5',
			'equipment_id'    => '5',
			'hotel_id'       => '1',
        ]);

        DB::table('meeting_space_floor_plans')->insert([
            'id'           => '1',
			'hotel_id'     => '1',
			'file'         => 'icon-file-download.png',
        ]);

        DB::table('hotel_rooms')->insert([
            'id'        => '1',
			'area'      => '45 m2',
			'height'    => '13ft.',
            'size'      => '1x45',
			'cocktail'  => '13 ft.',
			'theatre'   => '50',
			'school'    => '35',
			'banquet'   => '0',
            'imperial'  => '0',
			'ushape'    => '0',
			'hotel_id'  => '1',
			'created_by'=> '1',
        ]);

        DB::table('hotel_rooms_description')->insert([
            'id'             => '1',
			'name'           => 'Geneve',
			'hotel_room_id'  => '1',
            'language_id'    => '1',
		]);

		DB::table('hotel_rooms_description')->insert([
            'id'             => '2',
			'name'           => 'Geneve',
			'hotel_room_id'  => '1',
            'language_id'    => '2',
		]);

		DB::table('hotel_rooms_description')->insert([
            'id'             => '3',
			'name'           => 'Geneve',
			'hotel_room_id'  => '1',
            'language_id'    => '3',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '1',
			'icon'           => 'icon-wifi.png',
			'created_by'     => '1',
		]);
        
        DB::table('guest_room_facilities')->insert([
            'id'             => '2',
			'icon'           => 'icon-plane.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '3',
			'icon'           => 'icon-coffee.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '4',
			'icon'           => 'icon-iron.png',
			'created_by'     => '1',
		]);
        
        DB::table('guest_room_facilities')->insert([
            'id'             => '5',
			'icon'           => 'icon-bathrobes.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '6',
			'icon'           => 'icon-work-stations.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '7',
			'icon'           => 'icon-minibar.png',
			'created_by'     => '1',
		]);
        
        DB::table('guest_room_facilities')->insert([
            'id'             => '8',
			'icon'           => 'icon-jacuzzi.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '9',
			'icon'           => 'icon-bathtub.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '10',
			'icon'           => 'icon-kosher.png',
			'created_by'     => '1',
		]);
        
        DB::table('guest_room_facilities')->insert([
            'id'             => '11',
			'icon'           => 'icon-halal.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '12',
			'icon'           => 'icon-vegan.png',
			'created_by'     => '1',
		]);

		DB::table('guest_room_facilities')->insert([
            'id'             => '13',
			'icon'           => 'icon-gluten.png',
			'created_by'     => '1',
		]);
        
        DB::table('guest_room_facilities')->insert([
            'id'             => '14',
			'icon'           => 'icon-allergic.png',
			'created_by'     => '1',
		]);

        DB::table('guest_room_facilities_description')->insert([
            'id'             => '1',
			'name'           => 'Wireless Internet',
			'language_id'    => '1',
            'room_facility_id'     => '1',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '2',
			'name'           => 'Conexión inalámbrica a internet',
			'language_id'    => '2',
            'room_facility_id'     => '1',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '3',
			'name'           => 'Internet sem fio',
			'language_id'    => '3',
            'room_facility_id'     => '1',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '4',
			'name'           => 'Airport transfer',
			'language_id'    => '1',
            'room_facility_id'     => '2',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '5',
			'name'           => 'Transferencia de aeropuerto',
			'language_id'    => '2',
            'room_facility_id'     => '2',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '6',
			'name'           => 'Transfer do aeroporto',
			'language_id'    => '3',
            'room_facility_id'     => '2',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '7',
			'name'           => 'Coffee Machine',
			'language_id'    => '1',
            'room_facility_id'     => '3',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '8',
			'name'           => 'Maquina de cafe',
			'language_id'    => '2',
            'room_facility_id'     => '3',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '9',
			'name'           => 'Máquina de café',
			'language_id'    => '3',
            'room_facility_id'     => '3',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '10',
			'name'           => 'Iron Board and Iron',
			'language_id'    => '1',
            'room_facility_id'     => '4',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '11',
			'name'           => 'Plancha y tabla de planchar',
			'language_id'    => '2',
            'room_facility_id'     => '4',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '12',
			'name'           => 'Tábua de Ferro e Ferro',
			'language_id'    => '3',
            'room_facility_id'     => '4',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '13',
			'name'           => 'Bathrobes',
			'language_id'    => '1',
            'room_facility_id'     => '5',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '14',
			'name'           => 'Albornoces',
			'language_id'    => '2',
            'room_facility_id'     => '5',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '15',
			'name'           => 'Roupões de banho',
			'language_id'    => '3',
            'room_facility_id'     => '5',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '16',
			'name'           => 'Work station',
			'language_id'    => '1',
            'room_facility_id'     => '6',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '17',
			'name'           => 'Puesto de trabajo',
			'language_id'    => '2',
            'room_facility_id'     => '6',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '18',
			'name'           => 'Posto de trabalho',
			'language_id'    => '3',
            'room_facility_id'     => '6',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '19',
			'name'           => 'Minibar',
			'language_id'    => '1',
            'room_facility_id'     => '7',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '20',
			'name'           => 'Minibar',
			'language_id'    => '2',
            'room_facility_id'     => '7',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '21',
			'name'           => 'Frigobar',
			'language_id'    => '3',
            'room_facility_id'     => '7',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '22',
			'name'           => 'Jacuzzi',
			'language_id'    => '1',
            'room_facility_id'     => '8',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '23',
			'name'           => 'Jacuzzi',
			'language_id'    => '2',
            'room_facility_id'     => '8',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '24',
			'name'           => 'Jacuzzi',
			'language_id'    => '3',
            'room_facility_id'     => '8',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '25',
			'name'           => 'Bathtub',
			'language_id'    => '1',
            'room_facility_id'     => '9',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '26',
			'name'           => 'Bañera',
			'language_id'    => '2',
            'room_facility_id'     => '9',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '27',
			'name'           => 'Banheira',
			'language_id'    => '3',
            'room_facility_id'     => '9',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '28',
			'name'           => 'Kosher Food',
			'language_id'    => '1',
            'room_facility_id'     => '10',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '29',
			'name'           => 'Comida kosher',
			'language_id'    => '2',
            'room_facility_id'     => '10',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '30',
			'name'           => 'Comida kosher',
			'language_id'    => '3',
            'room_facility_id'     => '10',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '31',
			'name'           => 'Halal Food',
			'language_id'    => '1',
            'room_facility_id'     => '11',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '32',
			'name'           => 'Comida halal',
			'language_id'    => '2',
            'room_facility_id'     => '11',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '33',
			'name'           => 'Comida halal',
			'language_id'    => '3',
            'room_facility_id'     => '11',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '34',
			'name'           => 'Vegan Food',
			'language_id'    => '1',
            'room_facility_id'     => '12',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '35',
			'name'           => 'Comida vegana',
			'language_id'    => '2',
            'room_facility_id'     => '12',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '36',
			'name'           => 'Comida Vegana',
			'language_id'    => '3',
            'room_facility_id'     => '12',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '37',
			'name'           => 'Gluten Free Food',
			'language_id'    => '1',
            'room_facility_id'     => '13',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '38',
			'name'           => 'Alimentos sin gluten',
			'language_id'    => '2',
            'room_facility_id'     => '13',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '39',
			'name'           => 'Alimentos sem glúten',
			'language_id'    => '3',
            'room_facility_id'     => '13',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '40',
			'name'           => 'Allergic Options',
			'language_id'    => '1',
            'room_facility_id'     => '14',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '41',
			'name'           => 'Opciones alérgicas',
			'language_id'    => '2',
            'room_facility_id'     => '14',
		]);

		DB::table('guest_room_facilities_description')->insert([
            'id'             => '42',
			'name'           => 'Opções Alérgicas',
			'language_id'    => '3',
            'room_facility_id'     => '14',
		]);

        DB::table('guest_room_facilities_to_hotels')->insert([
            'id'             => '1',
			'room_facility_id'    => '1',
			'hotel_id'       => '1',
			'guest_room_id'       => '1',
        ]);

        DB::table('guest_room_facilities_to_hotels')->insert([
            'id'             => '2',
			'room_facility_id'    => '2',
			'hotel_id'       => '1',
			'guest_room_id'       => '1',
        ]);

        DB::table('guest_room_facilities_to_hotels')->insert([
            'id'             => '3',
			'room_facility_id'    => '3',
			'hotel_id'       => '1',
			'guest_room_id'       => '1',
        ]);

        DB::table('guest_room_facilities_to_hotels')->insert([
            'id'             => '4',
			'room_facility_id'    => '4',
			'hotel_id'       => '1',
			'guest_room_id'       => '1',
        ]);

        DB::table('guest_room_facilities_to_hotels')->insert([
            'id'             => '5',
			'room_facility_id'    => '5',
			'hotel_id'       => '1',
			'guest_room_id'       => '1',
        ]);

        DB::table('hotel_guest_rooms')->insert([
            'id'             		=> '1',
			'total_guest_rooms'     => '10',
			'doubles_guest_room'    => '10',
            'guest_room_suits'      => '31',
			'tax'    				=> 'yes',
			'type_of_tax'   		=> 'yes',
            'hotel_id'      		=> '1',
			'created_by'    		=> '1',
        ]);

        DB::table('hotel_guest_room_details')->insert([
            'id'             	   => '1',
			'quantity'             => '300',
			'hotel_guest_room_id'  => '1',
            'image'     		   => 'room-dt-img.jpg',
        ]);

        DB::table('hotel_guest_room_details_description')->insert([
            'id'       					      => '1',
			'hotel_guest_room_detail_id'      => '1',
			'name'          				  => 'Premium Room (Main Wing)',
			'language_id'    	  			  => '1',
            
        ]);
        DB::table('hotel_guest_room_details_description')->insert([
            'id'       					      => '2',
			'hotel_guest_room_detail_id'      => '1',
			'name'          				  => 'Habitación Premium (ala principal)',
			'language_id'    	  			  => '2',
            
        ]);
        DB::table('hotel_guest_room_details_description')->insert([
            'id'       					      => '3',
			'hotel_guest_room_detail_id'      => '1',
			'name'          				  => 'Quarto Premium (Ala Principal)',
			'language_id'    	  			  => '3',
            
        ]);

        DB::table('resturant_bar')->insert([
            'id'           => '1',
			'cuisine'      => 'International Buffet',
			'opening_time' => 'Breakfast to Late night',
            'dress_code'   => 'Resort Casual',
            'access'       => 'Open for everyone',
            'hotel_id'     => '1',
			'created_by'   => '1',
        ]);

        DB::table('resturant_bar_description')->insert([
            'id'            	   => '1',
			'name'           	   => 'Naons',
			'information'          => '1International dishes prepare infront of you and served buffet-style',
            'resturant_bar_id'     => '1',
			'language_id'    	   => '1',
        ]);

        DB::table('resturant_bar_description')->insert([
            'id'            	   => '2',
			'name'           	   => 'Naons',
			'information'          => '1Platos internacionales preparados frente a usted y servidos en forma de buffet',
            'resturant_bar_id'     => '1',
			'language_id'    	   => '2',
        ]);

        DB::table('resturant_bar_description')->insert([
            'id'            	   => '3',
			'name'           	   => 'Naons',
			'information'          => '1 Pratos internacionais são preparados na sua frente e servidos em estilo buffet',
            'resturant_bar_id'     => '1',
			'language_id'    	   => '3',
        ]);

        DB::table('nearby_places')->insert([
            'id'             => '1',
			'place_name'           => 'United States',
			'hotel_id'          => '1',
            'created_by'     => '1',
        ]);

        DB::table('hotel_gallery')->insert([
            'id'            => '1',
			'hotel_id'      => '1',
			'file'          => 'hotel-dt-img-1.jpg',
            'type'     		=> '1',
			'created_by'    => '1',
        ]);

        DB::table('tags')->insert([
            'id'             => '1',
			'slug'           => 'beach-resort',
			'created_by'     => '1',
        ]);
         DB::table('tags')->insert([
            'id'             => '2',
			'slug'           => 'city-hotel',
			'created_by'     => '1',
        ]);
          DB::table('tags')->insert([
            'id'             => '3',
			'slug'           => 'city-resort',
			'created_by'     => '1',
        ]);
           DB::table('tags')->insert([
            'id'             => '4',
			'slug'           => 'sky-esort',
			'created_by'     => '1',
        ]);
          DB::table('tags')->insert([
            'id'             => '5',
			'slug'           => 'spa-wellness',
			'created_by'     => '1',
        ]);
		 DB::table('tags')->insert([
            'id'             => '6',
			'slug'           => 'mountain-countrysideresort',
			'created_by'     => '1',
        ]);

        DB::table('tags_description')->insert([
            'id'             => '1',
			'name'           => 'Beach Resort',
			'language_id'    => '1',
            'tag_id'         => '1',
		]);

		DB::table('tags_description')->insert([
            'id'             => '2',
			'name'           => 'balneario',
			'language_id'    => '2',
            'tag_id'         => '1',
		]);

		DB::table('tags_description')->insert([
            'id'             => '3',
			'name'           => 'Resort na praia',
			'language_id'    => '3',
            'tag_id'         => '1',
		]);

		DB::table('tags_description')->insert([
            'id'             => '4',
			'name'           => 'City Hotel',
			'language_id'    => '1',
            'tag_id'         => '2',
		]);

		DB::table('tags_description')->insert([
            'id'             => '5',
			'name'           => 'Hotel de ciudad',
			'language_id'    => '2',
            'tag_id'         => '2',
		]);

		DB::table('tags_description')->insert([
            'id'             => '6',
			'name'           => 'Hotel da cidade',
			'language_id'    => '3',
            'tag_id'         => '2',
		]);

			DB::table('tags_description')->insert([
            'id'             => '7',
			'name'           => 'City Resort',
			'language_id'    => '1',
            'tag_id'         => '3',
		]);

		DB::table('tags_description')->insert([
            'id'             => '8',
			'name'           => 'Ciudad Resort',
			'language_id'    => '2',
            'tag_id'         => '3',
		]);

		DB::table('tags_description')->insert([
            'id'             => '9',
			'name'           => 'Resort da cidade',
			'language_id'    => '3',
            'tag_id'         => '3',
		]);

			DB::table('tags_description')->insert([
            'id'             => '10',
			'name'           => 'Sky Resort',
			'language_id'    => '1',
            'tag_id'         => '4',
		]);

		DB::table('tags_description')->insert([
            'id'             => '11',
			'name'           => 'Sky Resort',
			'language_id'    => '2',
            'tag_id'         => '4',
		]);

		DB::table('tags_description')->insert([
            'id'             => '12',
			'name'           => 'Sky Resort',
			'language_id'    => '3',
            'tag_id'         => '4',
		]);

		DB::table('tags_description')->insert([
            'id'             => '13',
			'name'           => 'Spa wellness',
			'language_id'    => '1',
            'tag_id'         => '5',
		]);

		DB::table('tags_description')->insert([
            'id'             => '14',
			'name'           => 'Bienestar spa',
			'language_id'    => '2',
            'tag_id'         => '5',
		]);

		DB::table('tags_description')->insert([
            'id'             => '15',
			'name'           => 'Spa de bem-estar',
			'language_id'    => '3',
            'tag_id'         => '5',
		]);

			DB::table('tags_description')->insert([
            'id'             => '16',
			'name'           => 'Mountain & Countryside Resort',
			'language_id'    => '1',
            'tag_id'         => '6',
		]);

		DB::table('tags_description')->insert([
            'id'             => '17',
			'name'           => 'Resort de montaña y campo',
			'language_id'    => '2',
            'tag_id'         => '6',
		]);

		DB::table('tags_description')->insert([
            'id'             => '18',
			'name'           => 'Resort de montanha e campo',
			'language_id'    => '3',
            'tag_id'         => '6',
		]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '1',
			'tag_id'           => '1',
			'hotel_id'          => '1',
        ]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '2',
			'tag_id'           => '2',
			'hotel_id'          => '1',
        ]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '3',
			'tag_id'           => '3',
			'hotel_id'          => '1',
        ]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '4',
			'tag_id'           => '4',
			'hotel_id'          => '1',
        ]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '5',
			'tag_id'           => '5',
			'hotel_id'          => '1',
        ]);

        DB::table('tags_to_hotels')->insert([
            'id'             => '6',
			'tag_id'           => '6',
			'hotel_id'          => '1',
        ]);

        DB::table('users_to_hotels')->insert([
            'id'             => '1',
			'user_id'           => '1',
			'hotel_id'          => '1',
            'created_by'     => '1',
        ]);
    }
}
