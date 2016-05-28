<?php

namespace M2Stuff\Uri;

class Customers
{
    /**
     * Uri to: Retrieve customer.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function getByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}";
    }

    /**
     * Uri to: Delete customer by ID.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function deleteByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}";
    }

    /**
     * Uri to: Create customer.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/customers/{$id}";
    }

    /**
     * Uri to: Create customer.
     * 
     * @return string
     */
    public function putMe()
    {
        return "/V1/customers/me";
    }

    /**
     * Uri to: Retrieve customer.
     * 
     * @return string
     */
    public function getMe()
    {
        return "/V1/customers/me";
    }

    /**
     * Uri to: Retrieve customers which match a specified criteria.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/customers/search";
    }

    /**
     * Uri to: Create customer account. Perform necessary business operations like sending email.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/customers";
    }

    /**
     * Uri to: Activate a customer account using a key that was sent in a confirmation email.
     * 
     * @return string
     */
    public function putMeActivate()
    {
        return "/V1/customers/me/activate";
    }

    /**
     * Uri to: Activate a customer account using a key that was sent in a confirmation email.
     * 
     * @param  string $email
     * @return string
     */
    public function putActivateByEmail($email)
    {
        return "/V1/customers/{$email}/activate";
    }

    /**
     * Uri to: Change customer password.
     * 
     * @return string
     */
    public function putMePassword()
    {
        return "/V1/customers/me/password";
    }

    /**
     * Uri to: Check if password reset token is valid.
     * 
     * @param  int    $customerId
     * @param  string $resetPasswordLinkToken
     * @return string
     */
    public function getPasswordResetLinkTokenByCustomerIdAndResetPasswordLinkToken($customerId, $resetPasswordLinkToken)
    {
        return "/V1/customers/{$customerId}/password/resetLinkToken/{$resetPasswordLinkToken}";
    }

    /**
     * Uri to: Send an email to the customer with a password reset link.
     * 
     * @return string
     */
    public function putPassword()
    {
        return "/V1/customers/password";
    }

    /**
     * Uri to: Gets the account confirmation status.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function getConfirmByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}/confirm";
    }

    /**
     * Uri to: Resend confirmation email.
     * 
     * @return string
     */
    public function postConfirm()
    {
        return "/V1/customers/confirm";
    }

    /**
     * Uri to: Validate customer data.
     * 
     * @return string
     */
    public function putValidate()
    {
        return "/V1/customers/validate";
    }

    /**
     * Uri to: Check if customer can be deleted.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function getPermissionsReadonlyByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}/permissions/readonly";
    }

    /**
     * Uri to: Check if given email is associated with a customer account in given website.
     * 
     * @return string
     */
    public function postIsEmailAvailable()
    {
        return "/V1/customers/isEmailAvailable";
    }

    /**
     * Uri to: Retrieve default billing address for the given customerId.
     * 
     * @return string
     */
    public function getMeBillingAddress()
    {
        return "/V1/customers/me/billingAddress";
    }

    /**
     * Uri to: Retrieve default billing address for the given customerId.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function getBillingAddressByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}/billingAddress";
    }

    /**
     * Uri to: Retrieve default shipping address for the given customerId.
     * 
     * @return string
     */
    public function getMeShippingAddress()
    {
        return "/V1/customers/me/shippingAddress";
    }

    /**
     * Uri to: Retrieve default shipping address for the given customerId.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function getShippingAddressByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}/shippingAddress";
    }

    /**
     * Uri to: Retrieve customer address.
     * 
     * @param  int    $addressId
     * @return string
     */
    public function getAddressesByAddressId($addressId)
    {
        return "/V1/customers/addresses/{$addressId}";
    }

    /**
     * Uri to: Creates an empty cart and quote for a specified customer.
     * 
     * @param  int    $customerId
     * @return string
     */
    public function postCartsByCustomerId($customerId)
    {
        return "/V1/customers/{$customerId}/carts";
    }
}
