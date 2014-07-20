Overview
========

Installation
------------

This bundle is available on Packagist_. You can install it using Composer:

.. todo::

    Change version requirement to @stable.

.. code-block:: bash

    $ composer require friendsofsymfony/http-cache-bundle:@alpha

Then add the bundle to your application:

.. code-block:: php

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new FOS\HttpCacheBundle\FOSHttpCacheBundle(),
            // ...
        );
    }

.. _requirements:

Requirements
------------

If you want to use this bundle’s annotations, include the
SensioFrameworkExtraBundle_ in your project:

.. code-block:: bash

    $ composer require sensio/framework-extra-bundle

If you wish to use expressions_ in your annotations , you also need Symfony’s
ExpressionLanguage_ component. If you’re not using full-stack Symfony 2.4 or
later, you need to explicitly add the component:

.. code-block:: bash

    $ composer require symfony/expression-language

Now you can configure the bundle under the ``fos_http_cache`` key as explained
in the :doc:`reference/configuration` section.

Functionality
-------------

This table shows where you can find specific functions.

========================= ==================================== ================================================ ==============================================
Functionality             Annotations                          Configuration                                    Manually
========================= ==================================== ================================================ ==============================================
Set Cache-Control headers (SensioFrameworkExtraBundle_)        :doc:`rules <configuration/caching-rules>`       (Symfony_)
Tag and invalidate        :doc:`@Tag <features/tagging>`       :doc:`rules <configuration/caching-rules>`       :doc:`cache manager <reference/cache-manager>`
Invalidate routes         :ref:`invalidateroute`               :ref:`invalidators <invalidation configuration>` :doc:`cache manager <reference/cache-manager>`
Invalidate paths          :ref:`invalidatepath`                :ref:`invalidators <invalidation configuration>` :doc:`cache manager <reference/cache-manager>`
========================= ==================================== ================================================ ==============================================

License
-------

This bundle is released under the MIT license.

.. literalinclude:: ../meta/LICENSE
    :language: none

.. _Packagist: https://packagist.org/packages/friendsofsymfony/http-cache-bundle
.. _SensioFrameworkExtraBundle: http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
.. _ExpressionLanguage: http://symfony.com/doc/current/components/expression_language/introduction.html
.. _Symfony: http://symfony.com/doc/current/book/http_cache.html#the-cache-control-header