<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/home.html.twig */
class __TwigTemplate_77e0fabf6536d2f755ce2d7e45972ae33a36e644d0df0f7e925f97ee00decda3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!--===============================
    =            Hero Area            =
    ================================-->

    <section class=\"hero-area bg-1 text-center overly\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Header Content -->
                    <div class=\"content-block\">
                        <h1>Otaku's Collection </h1>
                        <p> </p>

                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>



    <!--===========================================
    =            Popular section            =
    ============================================-->

    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Les plus populaires</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--===========================================
    =            New arrives section           =
    ============================================-->
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Les derniers sortis</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!--===========================================
    =            Recent section            =
    ============================================-->
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Récemment ajoutés</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <!--===============================
    =            Hero Area            =
    ================================-->

    <section class=\"hero-area bg-1 text-center overly\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Header Content -->
                    <div class=\"content-block\">
                        <h1>Otaku's Collection </h1>
                        <p> </p>

                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>



    <!--===========================================
    =            Popular section            =
    ============================================-->

    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Les plus populaires</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--===========================================
    =            New arrives section           =
    ============================================-->
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Les derniers sortis</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!--===========================================
    =            Recent section            =
    ============================================-->
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Récemment ajoutés</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-1.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-3.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">11inch Macbook Air</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"single.html\">
                                            <img class=\"card-img-top img-fluid\" src=\"images/products/products-2.jpg\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"single.html\">Full Study Table Combo</a></h4>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
{% endblock content %}", "pages/home.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/pages/home.html.twig");
    }
}
