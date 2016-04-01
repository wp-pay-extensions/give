<?php

/**
 * Title: Give Direct Debit gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Reüel van der Steege
 * @version 1.0.0
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Extensions_Give_DirectDebitGateway extends Pronamic_WP_Pay_Extensions_Give_Gateway {
	/**
	 * Constructs and initialize Direct Debit gateway.
	 */
	public function __construct() {
		parent::__construct(
			'pronamic_pay_direct_debit',
			__( 'Direct Debit', 'pronamic_ideal' ),
			Pronamic_WP_Pay_PaymentMethods::DIRECT_DEBIT
		);
	}
}
