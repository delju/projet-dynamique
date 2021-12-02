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

/* pages/search.html.twig */
class __TwigTemplate_3f452a7b821604fc35c2a45ac9df310cf793521c60266d390437abcfc1c39064 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/search.html.twig", 1);
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
    <!-- Advance Search -->
    <div class=\"advance-search\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12 col-md-12 align-content-center\">
                    <form>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-5\">
                                <input type=\"text\" class=\"form-control my-2 my-lg-1\" id=\"inputtext4\" placeholder=\"Je recherche un manga\">
                            </div>

                            <div class=\"form-group col-md-5\">
                                <input type=\"text\" class=\"form-control my-2 my-lg-1\" id=\"inputLocation4\" placeholder=\"Je recherche un auteur\">
                            </div>
                            <div class=\"form-group col-md-2 align-self-center\">
                                <button type=\"submit\" class=\"btn btn-danger\">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </section>

    <section class=\"section-sm\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"category-sidebar\">

                        <!-- Filtre Classification-->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Classification</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"kodomo\" id=\"kodomo\">
                                    <label for=\"kodomo\">Kodomo</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"shonen\" id=\"shonen\">
                                    <label for=\"shonen\">Shonen</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"shojo\" id=\"shojo\">
                                    <label for=\"shojo\">Shojo</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"seinen\" id=\"seinen\">
                                    <label for=\"seinen\">Seinen</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"josei\" id=\"josei\">
                                    <label for=\"josei\">Josei</label>
                                </li>
                            </ul>
                        </div>


                        <!-- Filtre par genre-->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Genre</h4>
                            <ul class=\"category-list\">

                            </ul>
                        </div>

                        <!-- Filtre par édition -->
                        <div class=\"widget \">
                            <h4 class=\"widget-header\">Editions</h4>
                            <select name=\"edition\" id=\"edition\">
                                <option selected>Select menu</option>
                                <option value=\"aaltair\">Aaltaïr</option>
                                <option value=\"glenat\">Glénat</option>
                                <option value=\"kana\">Kana</option>
                                <option value=\"kaze\">Kazé</option>
                                <option value=\"ohayo\">Ohayo</option>
                                <option value=\"panini\">Panini</option>

                            </select>
                        </div>

                        <!-- Filtre par Statut -->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Statut</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"inProgress\" id=\"inProgress\">
                                    <label for=\"inProgress\">En cours</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"terminate\" id=\"terminate\">
                                    <label for=\"terminate\">Terminé</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"oneshot\" id=\"oneshot\">
                                    <label for=\"oneshot\">One Shot</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"stopped\" id=\"stopped\">
                                    <label for=\"stopped\">En pause ou arrêté</label>
                                </li>
                            </ul>
                        </div>

                        <!--Filtre adapté en anime -->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Adaptation</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"anime\" id=\"anime\">
                                    <label for=\"anime\">Adapté en anime</label>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class=\"col-md-9\">
                    <div class=\"category-search-filter\">
                        <div class=\"row\">
                            <div class=\"col-md-12 text-right\">
                                <strong>Classement</strong>
                                <select>
                                    <option>Ordre croissant (A->Z)</option>
                                    <option value=\"1\">Ordre décroissant (Z->A)</option>
                                    <option value=\"2\">Plus populaires</option>
                                    <option value=\"4\">Plus récents</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class=\"product-grid-list\">
                        <div class=\"row mt-30\">
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
        return "pages/search.html.twig";
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

    <!-- Advance Search -->
    <div class=\"advance-search\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12 col-md-12 align-content-center\">
                    <form>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-5\">
                                <input type=\"text\" class=\"form-control my-2 my-lg-1\" id=\"inputtext4\" placeholder=\"Je recherche un manga\">
                            </div>

                            <div class=\"form-group col-md-5\">
                                <input type=\"text\" class=\"form-control my-2 my-lg-1\" id=\"inputLocation4\" placeholder=\"Je recherche un auteur\">
                            </div>
                            <div class=\"form-group col-md-2 align-self-center\">
                                <button type=\"submit\" class=\"btn btn-danger\">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </section>

    <section class=\"section-sm\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"category-sidebar\">

                        <!-- Filtre Classification-->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Classification</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"kodomo\" id=\"kodomo\">
                                    <label for=\"kodomo\">Kodomo</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"shonen\" id=\"shonen\">
                                    <label for=\"shonen\">Shonen</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"shojo\" id=\"shojo\">
                                    <label for=\"shojo\">Shojo</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"seinen\" id=\"seinen\">
                                    <label for=\"seinen\">Seinen</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"josei\" id=\"josei\">
                                    <label for=\"josei\">Josei</label>
                                </li>
                            </ul>
                        </div>


                        <!-- Filtre par genre-->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Genre</h4>
                            <ul class=\"category-list\">

                            </ul>
                        </div>

                        <!-- Filtre par édition -->
                        <div class=\"widget \">
                            <h4 class=\"widget-header\">Editions</h4>
                            <select name=\"edition\" id=\"edition\">
                                <option selected>Select menu</option>
                                <option value=\"aaltair\">Aaltaïr</option>
                                <option value=\"glenat\">Glénat</option>
                                <option value=\"kana\">Kana</option>
                                <option value=\"kaze\">Kazé</option>
                                <option value=\"ohayo\">Ohayo</option>
                                <option value=\"panini\">Panini</option>

                            </select>
                        </div>

                        <!-- Filtre par Statut -->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Statut</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"inProgress\" id=\"inProgress\">
                                    <label for=\"inProgress\">En cours</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"terminate\" id=\"terminate\">
                                    <label for=\"terminate\">Terminé</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"oneshot\" id=\"oneshot\">
                                    <label for=\"oneshot\">One Shot</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" name=\"stopped\" id=\"stopped\">
                                    <label for=\"stopped\">En pause ou arrêté</label>
                                </li>
                            </ul>
                        </div>

                        <!--Filtre adapté en anime -->
                        <div class=\"widget category-list\">
                            <h4 class=\"widget-header\">Adaptation</h4>
                            <ul class=\"category-list\">
                                <li>
                                    <input type=\"checkbox\" name=\"anime\" id=\"anime\">
                                    <label for=\"anime\">Adapté en anime</label>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class=\"col-md-9\">
                    <div class=\"category-search-filter\">
                        <div class=\"row\">
                            <div class=\"col-md-12 text-right\">
                                <strong>Classement</strong>
                                <select>
                                    <option>Ordre croissant (A->Z)</option>
                                    <option value=\"1\">Ordre décroissant (Z->A)</option>
                                    <option value=\"2\">Plus populaires</option>
                                    <option value=\"4\">Plus récents</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class=\"product-grid-list\">
                        <div class=\"row mt-30\">
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                            <div class=\"col-sm-12 col-lg-4 col-md-6\">
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
                                            <h4 class=\"card-title\"><a href=\"single.html\">Study Table Combo</a></h4>
                                            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                            <div class=\"product-ratings\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item selected\"><i class=\"fa fa-star\" ></i></li>
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
                </div>
            </div>
        </div>
    </section>

{% endblock content %}", "pages/search.html.twig", "/home/delvauxjulene/projet_dynamqiue/templates/pages/search.html.twig");
    }
}
