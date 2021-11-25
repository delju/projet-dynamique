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

/* base.html.twig */
class __TwigTemplate_3159dfa3e4f9e027c97bdf782e4593c180d4836dd56c6ba07d317df347ba07cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'favicon' => [$this, 'block_favicon'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('favicon', $context, $blocks);
        // line 32
        echo "

    </head>
    <body>
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 170
        echo "
        ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 195
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Otaku's Collection";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <!-- PLUGINS CSS STYLE -->
            <!-- <link href=\"plugins/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\"> -->
            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/bootstrap/css/bootstrap-slider.css"), "html", null, true);
        echo "\">
            <!-- Font Awesome -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Owl Carousel -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Fancy Box -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/fancybox/jquery.fancybox.pack.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/jquery-nice-select/css/nice-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- CUSTOM CSS -->
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        // line 29
        echo "            <!-- FAVICON -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <nav class=\"navbar navbar-expand-lg navbar-light navigation\">
                                <a class=\"navbar-brand\" href=\"index.html\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                    <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                                    <ul class=\"navbar-nav ml-auto main-nav \">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Home</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("search");
        echo "\" >
                                                Recherche</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("collection");
        echo "\">Ma collection</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("next-releases");
        echo "\" >
                                                Prochaines Sorties</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\" >
                                                Contact</a>
                                        </li>

                                    </ul>
                                    <ul class=\"navbar-nav ml-auto mt-10\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link login-button\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "\">Login</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link text-white add-button\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-books");
        echo "\"> Administrateur</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "
            <!--============================
=            Footer            =
=============================-->

            <footer class=\"footer section section-sm\">
                <!-- Container Start -->
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-7 offset-md-1 offset-lg-0\">
                            <!-- About -->
                            <div class=\"block about\">
                                <!-- footer logo -->
                                <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-footer.png"), "html", null, true);
        echo "\" alt=\"\">
                                <!-- description -->
                                <p class=\"alt-color\">Tous les mangas visibles en un seul endroit. Créez vos propres listes et ayez une vision d'ensemble de votre collection.</p>
                            </div>
                        </div>
                        <!-- Link list -->
                        <div class=\"col-lg-3 offset-lg-1 col-md-3\">
                            <div class=\"block\">
                                <h4>Pages du site</h4>
                                <ul>
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"search.html\">Recherche</a></li>
                                    <li><a href=\"dashboard-collection-ads.html\">Ma collection</a></li>
                                    <li><a href=\"next-arrives.html\">Prochaines sorties</a></li>
                                    <li><a href=\"contact-us.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Link list -->
                        <div class=\"col-lg-3 col-md-3 offset-md-1 offset-lg-0\">
                            <div class=\"block\">
                                <h4>Pages de l'administrateur</h4>
                                <ul>
                                    <li><a href=\"admin-books.html\">Les livres</a></li>
                                    <li><a href=\"admin-review.html\">Les commentaires</a></li>
                                    <li><a href=\"admin-messages.html\">Les messages</a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container End -->
            </footer>
            <!-- Footer Bottom -->
            <footer class=\"footer-bottom\">
                <!-- Container Start -->
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-12\">
                            <!-- Copyright -->
                            <div class=\"copyright\">
                                <p>Copyright © <script>
                                        var CurrentYear = new Date().getFullYear()
                                        document.write(CurrentYear)
                                    </script>. All Rights Reserved, theme by <a class=\"text-danger\" href=\"https://themefisher.com\" target=\"_blank\">themefisher.com</a></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-12\">
                            <!-- Social Icons -->
                            <ul class=\"social-media-icons text-right\">
                                <li><a class=\"fa fa-facebook\" href=\"https://www.facebook.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-twitter\" href=\"https://www.twitter.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-pinterest-p\" href=\"https://www.pinterest.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-vimeo\" href=\"\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
                <!-- To Top -->
                <div class=\"top-to\">
                    <a id=\"top\" class=\"\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
                </div>
            </footer>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 87
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->
            <!-- JAVASCRIPTS -->
            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
            <!-- tether js -->
            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tether/js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raty/jquery.raty-fa.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/smoothscroll/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- google map -->
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
            <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  470 => 193,  466 => 192,  460 => 189,  456 => 188,  452 => 187,  448 => 186,  444 => 185,  440 => 184,  435 => 182,  431 => 181,  427 => 180,  423 => 179,  417 => 176,  413 => 175,  408 => 172,  398 => 171,  387 => 87,  377 => 86,  299 => 102,  284 => 89,  282 => 86,  269 => 76,  263 => 73,  253 => 66,  246 => 62,  240 => 59,  233 => 55,  227 => 52,  215 => 43,  207 => 37,  197 => 36,  185 => 30,  182 => 29,  172 => 28,  160 => 25,  155 => 23,  151 => 22,  146 => 20,  142 => 19,  137 => 17,  132 => 15,  128 => 14,  123 => 11,  113 => 10,  94 => 7,  82 => 195,  80 => 171,  77 => 170,  75 => 36,  69 => 32,  67 => 28,  64 => 27,  61 => 10,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Otaku's Collection{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            <!-- PLUGINS CSS STYLE -->
            <!-- <link href=\"plugins/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\"> -->
            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('/plugins/bootstrap/css/bootstrap-slider.css') }}\">
            <!-- Font Awesome -->
            <link href=\"{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
            <!-- Owl Carousel -->
            <link href=\"{{ asset('/plugins/slick-carousel/slick/slick.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('/plugins/slick-carousel/slick/slick-theme.css') }}\" rel=\"stylesheet\">
            <!-- Fancy Box -->
            <link href=\"{{ asset('../plugins/fancybox/jquery.fancybox.pack.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('../plugins/jquery-nice-select/css/nice-select.css') }}\" rel=\"stylesheet\">
            <!-- CUSTOM CSS -->
            <link href=\"{{ asset('../css/style.css') }}\" rel=\"stylesheet\">
        {% endblock %}

        {% block favicon %}
            <!-- FAVICON -->
            <link href=\"{{ asset('img/favicon.png') }}\" rel=\"shortcut icon\">
        {% endblock favicon %}


    </head>
    <body>
        {% block body %}
            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <nav class=\"navbar navbar-expand-lg navbar-light navigation\">
                                <a class=\"navbar-brand\" href=\"index.html\">
                                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"\">
                                </a>
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                    <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                                    <ul class=\"navbar-nav ml-auto main-nav \">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"{{ url('home') }}\">Home</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"{{ url('search') }}\" >
                                                Recherche</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ url('collection') }}\">Ma collection</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"{{ url('next-releases') }}\" >
                                                Prochaines Sorties</a>
                                        </li>
                                        <li class=\"nav-item \">
                                            <a class=\"nav-link \" href=\"{{ url('contact') }}\" >
                                                Contact</a>
                                        </li>

                                    </ul>
                                    <ul class=\"navbar-nav ml-auto mt-10\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link login-button\" href=\"{{ url('login') }}\">Login</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link text-white add-button\" href=\"{{ url('admin-books') }}\"> Administrateur</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            {% block content %}

            {% endblock content %}

            <!--============================
=            Footer            =
=============================-->

            <footer class=\"footer section section-sm\">
                <!-- Container Start -->
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-7 offset-md-1 offset-lg-0\">
                            <!-- About -->
                            <div class=\"block about\">
                                <!-- footer logo -->
                                <img src=\"{{ asset('images/logo-footer.png') }}\" alt=\"\">
                                <!-- description -->
                                <p class=\"alt-color\">Tous les mangas visibles en un seul endroit. Créez vos propres listes et ayez une vision d'ensemble de votre collection.</p>
                            </div>
                        </div>
                        <!-- Link list -->
                        <div class=\"col-lg-3 offset-lg-1 col-md-3\">
                            <div class=\"block\">
                                <h4>Pages du site</h4>
                                <ul>
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"search.html\">Recherche</a></li>
                                    <li><a href=\"dashboard-collection-ads.html\">Ma collection</a></li>
                                    <li><a href=\"next-arrives.html\">Prochaines sorties</a></li>
                                    <li><a href=\"contact-us.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Link list -->
                        <div class=\"col-lg-3 col-md-3 offset-md-1 offset-lg-0\">
                            <div class=\"block\">
                                <h4>Pages de l'administrateur</h4>
                                <ul>
                                    <li><a href=\"admin-books.html\">Les livres</a></li>
                                    <li><a href=\"admin-review.html\">Les commentaires</a></li>
                                    <li><a href=\"admin-messages.html\">Les messages</a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container End -->
            </footer>
            <!-- Footer Bottom -->
            <footer class=\"footer-bottom\">
                <!-- Container Start -->
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-12\">
                            <!-- Copyright -->
                            <div class=\"copyright\">
                                <p>Copyright © <script>
                                        var CurrentYear = new Date().getFullYear()
                                        document.write(CurrentYear)
                                    </script>. All Rights Reserved, theme by <a class=\"text-danger\" href=\"https://themefisher.com\" target=\"_blank\">themefisher.com</a></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-12\">
                            <!-- Social Icons -->
                            <ul class=\"social-media-icons text-right\">
                                <li><a class=\"fa fa-facebook\" href=\"https://www.facebook.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-twitter\" href=\"https://www.twitter.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-pinterest-p\" href=\"https://www.pinterest.com/themefisher\" target=\"_blank\"></a></li>
                                <li><a class=\"fa fa-vimeo\" href=\"\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
                <!-- To Top -->
                <div class=\"top-to\">
                    <a id=\"top\" class=\"\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
                </div>
            </footer>

        {% endblock %}

        {% block javascripts %}
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}\"></script>
            <script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script>
            <![endif]-->
            <!-- JAVASCRIPTS -->
            <script src=\"{{ asset('plugins/jQuery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/bootstrap/js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/bootstrap/js/bootstrap-slider.js') }}\"></script>
            <!-- tether js -->
            <script src=\"{{ asset('plugins/tether/js/tether.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/raty/jquery.raty-fa.js') }}\"></script>
            <script src=\"{{ asset('plugins/slick-carousel/slick/slick.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}\"></script>
            <script src=\"{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}\"></script>
            <!-- google map -->
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
            <script src=\"{{ asset('plugins/google-map/gmap.js') }}\"></script>
            <script src=\"{{ asset('js/script.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/base.html.twig");
    }
}
