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

/* pages/single.html.twig */
class __TwigTemplate_cb240d6d27becfccfa5feeb096ba9f2876c1e4964cb3e6796032871652098f41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/single.html.twig", 1);
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
    <!--===================================
=            Store Section            =
====================================-->
    <section class=\"section bg-gray\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Left sidebar -->
                <div class=\"col-md-12\">
                    <div class=\"product-details\">
                        <h1 class=\"product-title text-center\">My Hero Academia</h1>

                        <!-- product slider -->

                        <div class=\"col-md-8 mx-auto\">
                            <img class=\"img-fluid w-100\" src=\"images/products/products-1.jpg\" alt=\"product-img\">
                        </div>

                        <!-- product slider -->

                        <div class=\"content \">
                            <ul class=\"nav nav-pills \" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\"
                                       aria-selected=\"true\">Description</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\"
                                       aria-selected=\"false\">Tomes</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\"
                                       aria-selected=\"false\">Avis</a>
                                </li>
                            </ul>
                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                                    <h3 class=\"tab-title\">Description</h3>
                                    <table class=\"table table-bordered product-table\">
                                        <tbody>
                                        <tr>
                                            <td >Titre Original</td>
                                            <td >Boku no Hiro Akademia</td>
                                        </tr>
                                        <tr>
                                            <td >Auteur</td>
                                            <td >Kohei Horikoshi</td>
                                        </tr>
                                        <tr>
                                            <td >Edition</td>
                                            <td >Ki-oon</td>
                                        </tr>
                                        <tr>
                                            <td >Genre</td>
                                            <td >Super Héro</td>
                                        </tr>
                                        <tr>
                                            <td >Classification</td>
                                            <td >Shonen</td>
                                        </tr>
                                        <tr>
                                            <td >Année de sortie</td>
                                            <td >2014</td>
                                        </tr>
                                        <tr>
                                            <td >Nombre de tomes</td>
                                            <td >32</td>
                                        </tr>
                                        <tr>
                                            <td >Adapté en animé</td>
                                            <td >5 saisons</td>
                                        </tr>
                                        <tr>
                                            <td >Statut</td>
                                            <td >En cours</td>
                                        </tr>
                                        <tr>
                                            <td >Votes</td>
                                            <td ><ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                </ul></td>
                                        </tr>
                                        <tr>
                                            <td >Résumé</td>
                                            <td >gfrgrzgzrz</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"tab-pane fade dashboard-container\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                                    <h3 class=\"tab-title\">Liste de tomes</h3>
                                    <table class=\"table table-bordered product-table\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\">Numéro</th>
                                            <th class=\"text-center\">Couverture</th>
                                            <th class=\"text-center\">Titre</th>
                                            <th class=\"text-center\">Résumé</th>
                                            <th class=\"text-center\">Ajouter</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class=\"text-center\">1</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">2</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-2.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">3</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-3.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">4</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-4.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
                                    <h3 class=\"tab-title\">Commentaires</h3>
                                    <div class=\"product-review\">
                                        <div class=\"media\">
                                            <!-- Avater -->
                                            <img src=\"images/user/user-thumb.jpg\" alt=\"avater\">
                                            <div class=\"media-body\">
                                                <!-- Ratings -->
                                                <div class=\"ratings\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"name\">
                                                    <h5>Jessica Brown</h5>
                                                </div>
                                                <div class=\"date\">
                                                    <p>Mar 20, 2018</p>
                                                </div>
                                                <div class=\"review-comment\">
                                                    <p>
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
                                                        riamipsa eaque.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"review-submission\">
                                            <h3 class=\"tab-title\">Donne ton avis</h3>
                                            <!-- Rate -->
                                            <div class=\"rate\">
                                                <div class=\"starrr\"></div>
                                            </div>
                                            <div class=\"review-submit\">
                                                <form action=\"#\" class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" placeholder=\"Name\">
                                                    </div>
                                                    <div class=\"col-12\">
                                                        <textarea name=\"review\" id=\"review\" rows=\"10\" class=\"form-control\" placeholder=\"Message\"></textarea>
                                                    </div>
                                                    <div class=\"col-12\">
                                                        <button type=\"submit\" class=\"btn btn-main\">Sumbit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Container End -->
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/single.html.twig";
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

    <!--===================================
=            Store Section            =
====================================-->
    <section class=\"section bg-gray\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Left sidebar -->
                <div class=\"col-md-12\">
                    <div class=\"product-details\">
                        <h1 class=\"product-title text-center\">My Hero Academia</h1>

                        <!-- product slider -->

                        <div class=\"col-md-8 mx-auto\">
                            <img class=\"img-fluid w-100\" src=\"images/products/products-1.jpg\" alt=\"product-img\">
                        </div>

                        <!-- product slider -->

                        <div class=\"content \">
                            <ul class=\"nav nav-pills \" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\"
                                       aria-selected=\"true\">Description</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\"
                                       aria-selected=\"false\">Tomes</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\"
                                       aria-selected=\"false\">Avis</a>
                                </li>
                            </ul>
                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                                    <h3 class=\"tab-title\">Description</h3>
                                    <table class=\"table table-bordered product-table\">
                                        <tbody>
                                        <tr>
                                            <td >Titre Original</td>
                                            <td >Boku no Hiro Akademia</td>
                                        </tr>
                                        <tr>
                                            <td >Auteur</td>
                                            <td >Kohei Horikoshi</td>
                                        </tr>
                                        <tr>
                                            <td >Edition</td>
                                            <td >Ki-oon</td>
                                        </tr>
                                        <tr>
                                            <td >Genre</td>
                                            <td >Super Héro</td>
                                        </tr>
                                        <tr>
                                            <td >Classification</td>
                                            <td >Shonen</td>
                                        </tr>
                                        <tr>
                                            <td >Année de sortie</td>
                                            <td >2014</td>
                                        </tr>
                                        <tr>
                                            <td >Nombre de tomes</td>
                                            <td >32</td>
                                        </tr>
                                        <tr>
                                            <td >Adapté en animé</td>
                                            <td >5 saisons</td>
                                        </tr>
                                        <tr>
                                            <td >Statut</td>
                                            <td >En cours</td>
                                        </tr>
                                        <tr>
                                            <td >Votes</td>
                                            <td ><ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <i class=\"fa fa-star\"></i>
                                                    </li>
                                                </ul></td>
                                        </tr>
                                        <tr>
                                            <td >Résumé</td>
                                            <td >gfrgrzgzrz</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"tab-pane fade dashboard-container\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                                    <h3 class=\"tab-title\">Liste de tomes</h3>
                                    <table class=\"table table-bordered product-table\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\">Numéro</th>
                                            <th class=\"text-center\">Couverture</th>
                                            <th class=\"text-center\">Titre</th>
                                            <th class=\"text-center\">Résumé</th>
                                            <th class=\"text-center\">Ajouter</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class=\"text-center\">1</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">2</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-2.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">3</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-3.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle \"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\">4</td>
                                            <td class=\"product-thumb\">
                                                <img width=\"80px\" height=\"auto\" src=\"images/products/products-4.jpg\" alt=\"image description\"></td>
                                            <td class=\"product-category\">
                                                <h3 class=\"title\">Macbook Pro 15inch</h3>
                                            </td>
                                            <td class=\"product-details\"><span class=\"categories\">Laptops</span></td>
                                            <td class=\"action\" data-title=\"Action\">
                                                <div class=\"\">
                                                    <ul class=\"list-inline justify-content-center\">
                                                        <li class=\"list-inline-item\">
                                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"add\" href=\"\">
                                                                <i class=\"fa fa-plus-circle\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
                                    <h3 class=\"tab-title\">Commentaires</h3>
                                    <div class=\"product-review\">
                                        <div class=\"media\">
                                            <!-- Avater -->
                                            <img src=\"images/user/user-thumb.jpg\" alt=\"avater\">
                                            <div class=\"media-body\">
                                                <!-- Ratings -->
                                                <div class=\"ratings\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <i class=\"fa fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"name\">
                                                    <h5>Jessica Brown</h5>
                                                </div>
                                                <div class=\"date\">
                                                    <p>Mar 20, 2018</p>
                                                </div>
                                                <div class=\"review-comment\">
                                                    <p>
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
                                                        riamipsa eaque.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"review-submission\">
                                            <h3 class=\"tab-title\">Donne ton avis</h3>
                                            <!-- Rate -->
                                            <div class=\"rate\">
                                                <div class=\"starrr\"></div>
                                            </div>
                                            <div class=\"review-submit\">
                                                <form action=\"#\" class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" placeholder=\"Name\">
                                                    </div>
                                                    <div class=\"col-12\">
                                                        <textarea name=\"review\" id=\"review\" rows=\"10\" class=\"form-control\" placeholder=\"Message\"></textarea>
                                                    </div>
                                                    <div class=\"col-12\">
                                                        <button type=\"submit\" class=\"btn btn-main\">Sumbit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Container End -->
    </section>

{% endblock content %}", "pages/single.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/pages/single.html.twig");
    }
}
