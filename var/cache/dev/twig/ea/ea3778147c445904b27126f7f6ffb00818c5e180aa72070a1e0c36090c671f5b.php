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

/* pages/admin-messages.html.twig */
class __TwigTemplate_6dde004fb6c773c24462139cb2884b36caab6140fe43a9626a6b1d17e9bade0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin-messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin-messages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin-messages.html.twig", 1);
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
    <section class=\"dashboard section\">
        <!-- Container Start -->
        <div class=\"container\">
            <!-- Row Start -->
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1 col-lg-3 offset-lg-0\">
                    <div class=\"sidebar\">

                        <!-- Dashboard Links -->
                        <div class=\"widget user-dashboard-menu\">
                            <ul>
                                <li >
                                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-books");
        echo "\"><i class=\"fa fa-bookmark-o\"></i> Livres</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-reviews");
        echo "\"><i class=\"fa fa-star-o\"></i>Commentaires</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-messages");
        echo "\"><i class=\"fa fa-star-o\"></i>Messages</a>
                                </li>
                            </ul>
                        </div>


                        <!-- Modal -->
                        <!-- delete-account modal -->
                        <div class=\"modal fade\" id=\"deleteitem\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header border-bottom-0\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-center\">
                                        <img src=\"images/account/Account1.png\" class=\"img-fluid mb-2\" alt=\"\">
                                        <h6 class=\"py-2\">Es-tu sur de vouloir le supprimer?</h6>

                                    </div>
                                    <div class=\"modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center\">
                                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cancel</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete account popup modal end-->
                    </div>
                </div>
                <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">
                    <!-- Recently Favorited -->
                    <div class=\"widget dashboard-container my-adslist\">
                        <h2 class=\"widget-header\">Les messages</h2>
                        <table class=\"table table-responsive product-dashboard-table\">
                            <thead>
                            <tr>
                                <th class=\"text-center\">Image</th>
                                <th class=\"text-center\">Série</th>
                                <th class=\"text-center\">Tome</th>
                                <th class=\"text-center\">Auteur</th>
                                <th class=\"text-center\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>

                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-2.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Study Table Combo</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>USA</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-3.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-4.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- pagination -->
                    <div class=\"pagination justify-content-center\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\">&laquo;</span>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\">&raquo;</span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination -->

                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  89 => 20,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <section class=\"dashboard section\">
        <!-- Container Start -->
        <div class=\"container\">
            <!-- Row Start -->
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1 col-lg-3 offset-lg-0\">
                    <div class=\"sidebar\">

                        <!-- Dashboard Links -->
                        <div class=\"widget user-dashboard-menu\">
                            <ul>
                                <li >
                                    <a href=\"{{ url('admin-books') }}\"><i class=\"fa fa-bookmark-o\"></i> Livres</a>
                                </li>
                                <li>
                                    <a href=\"{{ url('admin-reviews') }}\"><i class=\"fa fa-star-o\"></i>Commentaires</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"{{ url('admin-messages') }}\"><i class=\"fa fa-star-o\"></i>Messages</a>
                                </li>
                            </ul>
                        </div>


                        <!-- Modal -->
                        <!-- delete-account modal -->
                        <div class=\"modal fade\" id=\"deleteitem\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header border-bottom-0\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-center\">
                                        <img src=\"images/account/Account1.png\" class=\"img-fluid mb-2\" alt=\"\">
                                        <h6 class=\"py-2\">Es-tu sur de vouloir le supprimer?</h6>

                                    </div>
                                    <div class=\"modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center\">
                                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cancel</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete account popup modal end-->
                    </div>
                </div>
                <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">
                    <!-- Recently Favorited -->
                    <div class=\"widget dashboard-container my-adslist\">
                        <h2 class=\"widget-header\">Les messages</h2>
                        <table class=\"table table-responsive product-dashboard-table\">
                            <thead>
                            <tr>
                                <th class=\"text-center\">Image</th>
                                <th class=\"text-center\">Série</th>
                                <th class=\"text-center\">Tome</th>
                                <th class=\"text-center\">Auteur</th>
                                <th class=\"text-center\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>

                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-2.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Study Table Combo</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>USA</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-3.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-4.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class=\"product-thumb\">
                                    <img width=\"80px\" height=\"auto\" src=\"images/products/products-1.jpg\" alt=\"image description\"></td>
                                <td class=\"product-details\">
                                    <h3 class=\"title\">Macbook Pro 15inch</h3>
                                    <span class=\"add-id\"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class=\"status active\"><strong>Status</strong>Active</span>
                                    <span class=\"location\"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                                <td class=\"action\" data-title=\"Action\">
                                    <div class=\"\">
                                        <ul class=\"list-inline justify-content-center\">
                                            <li class=\"list-inline-item\">
                                                <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\" class=\"view\" href=\"search.html\">
                                                    <i class=\"fa fa-eye\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a data-placement=\"top\" title=\"Delete\" class=\"delete\" href=\"\" data-toggle=\"modal\" data-target=\"#deleteitem\">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- pagination -->
                    <div class=\"pagination justify-content-center\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\">&laquo;</span>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\">&raquo;</span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination -->

                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>

{% endblock content %}", "pages/admin-messages.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/pages/admin-messages.html.twig");
    }
}
