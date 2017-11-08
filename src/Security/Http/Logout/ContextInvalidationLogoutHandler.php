<?php

/*
 * This file is part of the FOSHttpCacheBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCacheBundle\Security\Http\Logout;

use FOS\HttpCacheBundle\UserContextInvalidator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;

/**
 * @deprecated Use ContextInvalidationSessionLogoutHandler in this same namespace as a replacement.
 */
class ContextInvalidationLogoutHandler implements LogoutHandlerInterface
{
    private $invalidator;

    public function __construct(UserContextInvalidator $invalidator)
    {
        $this->invalidator = $invalidator;
    }

    /**
     * {@inheritdoc}
     */
    public function logout(Request $request, Response $response, TokenInterface $token)
    {
        @trigger_error('Using the ContextInvalidationLogoutHandler is deprecated', E_USER_DEPRECATED);
        $this->invalidator->invalidateContext($request->getSession()->getId());
    }
}
