<?php
/**
 * Credit card gateway
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Extensions\Give
 */

namespace Pronamic\WordPress\Pay\Extensions\Give;

use Pronamic\WordPress\Pay\Core\PaymentMethods;

/**
 * Title: Give Credit Card gateway
 * Description:
 * Copyright: 2005-2021 Pronamic
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 2.0.3
 * @since   1.0.0
 */
class CreditCardGateway extends Gateway {
	/**
	 * Constructs and initialize Credit Card gateway.
	 */
	public function __construct() {
		parent::__construct(
			'pronamic_pay_credit_card',
			__( 'Credit Card', 'pronamic_ideal' ),
			PaymentMethods::CREDIT_CARD
		);
	}
}
