<?php
	$tab = array(
			'heading' => 'Pannnnel heading',
			'body' => array(
					'p' => array(
							'in' => "Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.",
							'class' => 'testbodypanel',
							//'attr' => array('ng-data' => 'model', 'style' => 'color:#C50;background-color:#5C5;')
						),
					//'strong' => array(
					//		'in' => "Mon strong a moi, en jaune !",
					//		'id' => "MyStrongID",
					//		'attr' => array('MyAttr' => 'MyValAttr', 'style' => 'color:yellow;background-color:#292929;')
					//	)
				),
			'table' => array(
					'class' => 'table',
					'id' => 'MyTableau',
					'attr' => array('ng-data' => 'model', 'style' => 'font-weight:700;'),
					'inter' => array(
							'thead' => array(
									'attr' => array('style' => 'font-size:10px;'),
									'class' => 'MyHeadTable',
									'in' => array(
										'tr' => array(
											'attr' => array('class' => 'trClassK'),
											'content' => array(
													array(
														'balise' => 'th',
														'in' => '#'
													),
													array(
														'balise' => 'th',
														'in' => 'First Name'
													),
													array(
														'balise' => 'th',
														'attr' => array('style' => 'background-color:#C50;'),
														'in' => 'Last Name'
													),
													'Username'
												)
											)
									)
								),
							'tbody' => array(
									'class' => 'TBIDU',
									'in' => array(
										'tr' => array(
												'attr' => array('class' => 'Gamlop'),
												'content' => array(
														array(
															'balise' => 'th',
															'attr' => array('scope' => 'row'),
															'in' => '1'
															),
														array(
															'balise' => 'td',
															'attr' => array('style' => 'font-weight:900;'),
															'in' => 'Mark'
															),
														array(
															'balise' => 'td',
															'in' => 'Otto'
															),
														'@mdo'
													),
											)
										)
								)
						)
				)
		);
