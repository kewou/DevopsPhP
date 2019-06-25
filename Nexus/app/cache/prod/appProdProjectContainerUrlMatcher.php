<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/admin')) {
            // Admin_accueil
            if ('/admin' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_Admin_accueil;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'Admin_accueil');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'Admin_accueil',);
            }
            not_Admin_accueil:

            if (0 === strpos($pathinfo, '/admin/clients')) {
                // Admin_clients
                if ('/admin/clients' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\GestionClientController::clientsAction',  '_route' => 'Admin_clients',);
                }

                // Admin_client
                if (preg_match('#^/admin/clients/(?P<id>[^/]++)/compte\\-client$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_client')), array (  '_controller' => 'AdminBundle\\Controller\\GestionClientController::infosClientAction',));
                }

                // Admin_client_delete
                if (preg_match('#^/admin/clients/(?P<id>[^/]++)/supprimer\\-client$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_client_delete')), array (  '_controller' => 'AdminBundle\\Controller\\GestionClientController::deleteUserAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/moniteurs')) {
                // Admin_moniteurs
                if ('/admin/moniteurs' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\GestionMoniteurController::moniteursAction',  '_route' => 'Admin_moniteurs',);
                }

                // Admin_moniteur
                if (preg_match('#^/admin/moniteurs/(?P<id>[^/]++)/compte\\-moniteur$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_moniteur')), array (  '_controller' => 'AdminBundle\\Controller\\GestionMoniteurController::infosMoniteurAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/moniteur')) {
            // Moniteur_accueil
            if ('/moniteur' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_Moniteur_accueil;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'Moniteur_accueil');
                }

                return array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::indexAction',  '_route' => 'Moniteur_accueil',);
            }
            not_Moniteur_accueil:

            if (0 === strpos($pathinfo, '/moniteur/calendrier')) {
                // Moniteur_calendrier
                if ('/moniteur/calendrier' === $pathinfo) {
                    return array (  '_controller' => 'CalendrierBundle\\Controller\\CalendrierController::calendrierMoniteurAction',  '_route' => 'Moniteur_calendrier',);
                }

                // Moniteur_calendrierPagination
                if ('/moniteur/calendrier/pagination' === $pathinfo) {
                    return array (  '_controller' => 'CalendrierBundle\\Controller\\CalendrierController::paginationMoniteurAction',  '_route' => 'Moniteur_calendrierPagination',);
                }

                // Moniteur_action_controle
                if ('/moniteur/calendrier/action/controle' === $pathinfo) {
                    return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::controleActionMoniteurAction',  '_route' => 'Moniteur_action_controle',);
                }

                if (0 === strpos($pathinfo, '/moniteur/calendrier/moniteur')) {
                    // Moniteur_valider
                    if ('/moniteur/calendrier/moniteur/valider' === $pathinfo) {
                        return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::validerAction',  '_route' => 'Moniteur_valider',);
                    }

                    if (0 === strpos($pathinfo, '/moniteur/calendrier/moniteur/a')) {
                        // Moniteur_affecter
                        if ('/moniteur/calendrier/moniteur/affecter' === $pathinfo) {
                            return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::affecterAction',  '_route' => 'Moniteur_affecter',);
                        }

                        // Moniteur_annuler
                        if ('/moniteur/calendrier/moniteur/annuler' === $pathinfo) {
                            return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::annulerMoniteurAction',  '_route' => 'Moniteur_annuler',);
                        }

                    }

                }

                // Moniteur_fermer
                if ('/moniteur/calendrier/fermer' === $pathinfo) {
                    return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::fermerAction',  '_route' => 'Moniteur_fermer',);
                }

                // Moniteur_liste_nomCLient
                if ('/moniteur/calendrier/clients' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_Moniteur_liste_nomCLient;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'Moniteur_liste_nomCLient');
                    }

                    return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::listeNomClientAction',  '_route' => 'Moniteur_liste_nomCLient',);
                }
                not_Moniteur_liste_nomCLient:

            }

            // fos_moniteur_profile_show
            if ('/moniteur/profil' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showMoniteurAction',  '_route' => 'fos_moniteur_profile_show',);
            }

            // fos_moniteur_profile_edit
            if ('/moniteur/gestion-profil' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editMoniteurAction',  '_route' => 'fos_moniteur_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/privee')) {
            // Privee_accueil
            if ('/privee' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_Privee_accueil;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'Privee_accueil');
                }

                return array (  '_controller' => 'PriveeBundle\\Controller\\PriveeController::indexAction',  '_route' => 'Privee_accueil',);
            }
            not_Privee_accueil:

            if (0 === strpos($pathinfo, '/privee/calendrier')) {
                // Privee_calendrier
                if ('/privee/calendrier' === $pathinfo) {
                    return array (  '_controller' => 'CalendrierBundle\\Controller\\CalendrierController::calendrierAction',  '_route' => 'Privee_calendrier',);
                }

                // Privee_calendrierPagination
                if ('/privee/calendrier/pagination' === $pathinfo) {
                    return array (  '_controller' => 'CalendrierBundle\\Controller\\CalendrierController::paginationAction',  '_route' => 'Privee_calendrierPagination',);
                }

                if (0 === strpos($pathinfo, '/privee/calendrier/reserver')) {
                    // Privee_reserver_controle
                    if ('/privee/calendrier/reserver/controle' === $pathinfo) {
                        return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::controleReservationAction',  '_route' => 'Privee_reserver_controle',);
                    }

                    // Privee_reserver
                    if ('/privee/calendrier/reserver' === $pathinfo) {
                        return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::reserverAction',  '_route' => 'Privee_reserver',);
                    }

                }

                // Privee_annuler
                if ('/privee/calendrier/annuler' === $pathinfo) {
                    return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::annulerUserAction',  '_route' => 'Privee_annuler',);
                }

            }

        }

        // Public_accueil
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_Public_accueil;
            } else {
                return $this->redirect($rawPathinfo.'/', 'Public_accueil');
            }

            return array (  '_controller' => 'PublicBundle\\Controller\\PublicController::indexAction',  '_route' => 'Public_accueil',);
        }
        not_Public_accueil:

        // Public_forum
        if ('/forum' === $pathinfo) {
            return array (  '_controller' => 'PublicBundle\\Controller\\PublicController::forumAction',  '_route' => 'Public_forum',);
        }

        // Public_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'PublicBundle\\Controller\\PublicController::contactAction',  '_route' => 'Public_contact',);
        }

        // user_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_user_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle:Default:index',  '_route' => 'user_homepage',);
        }
        not_user_homepage:

        // fos_user_security_login
        if ('/connexion' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ('/login_check' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        if (0 === strpos($pathinfo, '/privee')) {
            // fos_user_security_logout
            if ('/privee/deconnexion' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/privee/profile')) {
                // fos_user_profile_show
                if ('/privee/profile/profil' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }

                // fos_user_profile_edit
                if ('/privee/profile/gestion-profil' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register/inscription' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check_email' === $pathinfo) {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/mot-de-passe-oublie' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }

                // fos_user_resetting_send_email
                if ('/resetting/send_email' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }

                // fos_user_resetting_check_email
                if ('/resetting/check_email' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }

            }

        }

        // fos_user_change_password
        if ('/privee/profile/changer-mot-de-passe' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
