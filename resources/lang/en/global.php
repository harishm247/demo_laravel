<?phpreturn [		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],		'abilities' => [		'title' => 'Abilities',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'abilities' => 'Abilities',		],	],		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'roles' => 'Roles',			'remember-token' => 'Remember token',		],	],	'products' => [		'title' 	 => 'Products',		'created_at' => 'Time',		'fields' => [			'sno'      => 'Sno.',			'name' 	   => 'Name',			'price'    => 'Price',			'in_stock' => 'Status',		],	],	'customers' => [		'title' 	 => 'Customers',		'created_at' => 'Time',		'fields' => [			'id'    => 'Customer Id',			'sno'   => 'Sno.',			'name'  => 'Name',			'email' => 'Email',			'registered_date' => "Registered Date"		],	],	'orders' => [		'title' 	 => 'Orders',		'created_at' => 'Time',		'fields' => [			'sno'   		=> 'Sno.',			'customer_name' => 'Customer Name',			'total_amount' 	=> 'Total Amount',			'status' 		=> 'Status',			'action' 		=> 'Action',					],	],	'order_detail' => [		'title' 		  => 'Order Detials',		'sub_title'  	  => 'Order Info',		'product_title'   => 'Order Products',		'no_record_found' => 'Unable to fetch Order detials.',		'created_at' 	  => 'Time',		'fields' => [			'sno'   		 => 'Sno.',			'customer_name'  => 'Customer Name',			'customer_email' => 'Email',			'invoice_number' => 'Invoice Number',			'status' 		 => 'Order Status',			'total_amount'   => 'Order Total',			'order_date'  	 => 'Order Date',			'product_name' 	 => 'Product Name',			'price' 		 => 'Price',			'quantity' 		 => 'Purchase Qauntity',		],	],		'app_create' => 'Create',	'app_save' => 'Save',	'app_edit' => 'Edit',	'app_view' => 'View',	'app_update' => 'Update',	'app_list' => 'List',	'app_no_entries_in_table' => 'No entries in table',	'custom_controller_index' => 'Custom controller index.',	'app_logout' => 'Logout',	'app_add_new' => 'Add new',	'app_are_you_sure' => 'Are you sure?',	'app_back_to_list' => 'Back to list',	'app_dashboard' => 'Dashboard',	'app_delete' => 'Delete',	'global_title' => 'Admin Panel',];