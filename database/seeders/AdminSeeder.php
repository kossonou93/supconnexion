<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'     => 'Administrateur',
            'email'    =>  'kossonou93@hotmail.fr',
            'password' => Hash::make('mk080244.'),
        ]);

        DB::table('contrats')->insert(
            array(
                array('type'     => 'CDD avec bulletin de paye'),
                array('type'     => 'Sur facture'),
                )
        );

        DB::table('type_formations')->insert(
        array(
            array('type' => 'BTS'),
            array('type' => 'Licence Professionelle'),
            array('type' => 'Master Professionnelle'),
            array('type' => 'Université'),
            array('type' => "Ecole d-Ingénieur"),
            array('type' => "Ecole d'administration publique"),
            array('type' => 'Ecole de commerce'),
            array('type' => "Ecole d'agronomie"),
            array('type' => 'Ecole de journalisme'),
            array('type' => "Ecole d'architecture"),
            array('type' => "Ecole de multimedia"),
            array('type' => 'Autres Etablissements du supérieur'),
            //array('name' => 'Le Salon des artistes', 'id_auteur' => '7')
            )
        );

        DB::table('disponibilites')->insert(
            array(
                array('titre' => 'Premier semestre'),
                array('titre' => 'Second semestre'),
                array('titre' => "Hors périodes d'enseignement habituelles (congés, vacances, ...)"),
                )
            );

        DB::table('interventions')->insert(
            array(
                array('type' => 'Aucun'),
                array('type' => 'Déplacements possibles hors de ma région'),
                array('type' => 'Déplacements possibles hors de ma ville'),
                array('type' => 'Déplacements possibles hors de ma commune'),
                array('type' => "Intervention à distance possible (visioconférence)"),
                )
            );

        DB::table('durees')->insert(
            array(
                array('type' => 'Longue (> 18 heures)'),
                array('type' => 'Moyenne (4 - 18 heures)'),
                array('type' => "Ponctuelle (1 - 4 heures)"),
                )
            );

        DB::table('langues')->insert(
            array(
                array('name' => 'Anglais'),
                array('name' => 'Allemand'),
                array('name' => 'Espagnol'),
                array('name' => 'Français'),
                )
            );

        DB::table('type_experiences')->insert(
            array(
                array('type' => 'Aucune'),
                array('type' => 'Occasionnelle'),
                array('type' => "Récurrentes"),
                )
            );

        DB::table('disciplines')->insert(
            array(
                array('name' => 'HYGIENE ET SECURITE AU TRAVAIL (HST)'),
                array('name' => 'GESTION DE L’ENVIRONNEMENT ET DES RESSOURCES NATURELLES(GERNA)'),
                array('name' => 'SECURITE INCENDIE ET PREVENTION (SIP)'),
                array('name' => 'AGRICULTURE TROPICALE : OPTION PRODUCTION VEGETALE (ATV)'),
                array('name' => "AGRICULTURE TROPICALE : OPTION PRODUCTION ANIMALE (ATA)"),
                array('name' => "RESEAU INFORMATIQUE ET TELECOMMUNICATIONS (RIT)"),
                array('name' => 'MAINTENANCE DES SYSTEMES DE PRODUCTION (MSP)'),
                array('name' => "INFORMATIQUE‐DEVELOPPEUR D’APPLICATION (IDA)"),
                array('name' => 'ART ET AMENAGEMENT DU CADRE DE VIE (AACV)'),
                array('name' => "OPTIQUE‐LUNETTERIE (OPL)"),
                array('name' => "MINES‐GEOLOGIE‐PETROLE (MGP)"),
                array('name' => 'INDUSTRIES AGRO‐ALIMENTAIRES ET CHIMIQUES : OPTION CONTROLE (IACC)'),
                array('name' => 'INDUSTRIES AGRO‐ALIMENTAIRES ET CHIMIQUES : OPTION PRODUCTION (IACP)'),
                array('name' => 'GENIE ENERGETIQUE ET ENVIRONNEMENT (GEE)'),
                array('name' => 'ELECTROTECHNIQUE (ELT)'),
                array('name' => 'SYSTEMES ELECTRONIQUES ET INFORMATIQUES (SEI)'),
                array('name' => 'URBANISME (URB)'),
                array('name' => 'GENIE CIVIL : OPTION BATIMENT (GBAT)'),
                array('name' => 'GENIE CIVIL : OPTION TRAVAUX PUBLICS (GTP)'),
                array('name' => 'GENIE CIVIL OPTION GEOMETRE TOPOGRAPHE (GGT)'),
                array('name' => 'COMMUNICATION VISUELLE (CV)'),
                array('name' => 'LOGISTIQUE (LOG)'),
                array('name' => 'FINANCE COMPTABILITE ET GESTION D’ENTREPRISES (FCGE)'),
                array('name' => 'TOURISME‐HOTELLERIE (TH)'),
                array('name' => 'GESTION COMMERCIALE (GEC)'),
                array('name' => 'ASSISTANAT DE DIRECTION (AD)'),
                array('name' => 'RESSOURCES HUMAINES ET COMMUNICATION (RHC)'),
                array('name' => 'SCIENCES DE L’INFORMATION (SI)'),
                array('name' => 'COSMETOLOGIE (COS)'),
                array('name' => 'INSTALLATION ET MAINTENANCE DES SYSTEMES DE SECURITE (IM2S)'),
                array('name' => 'GESTION DES COLLECTIVITES TERRITORIALES (GCT)'),
                array('name' => 'FINANCES‐ASSURANCES (FA)'),
                array('name' => 'CARRIERE JURIDIQUE ET PROFESSIONS IMMOBILIERES (CJPIM)'),
                array('name' => 'LANGUES LITTERATURES ET CIVILISATIONS (LLC)'),
                array('name' => 'SCIENCES DE L’HOMME ET DE LA SOCIETE (SHS)'),
                array('name' => 'Information Communication Arts (ICA)'),
                array('name' => 'MATHS INFORMATIQUE (MATHS INFO)'),
                array('name' => 'SCIENCES DES STRUCTURES  DE LA MATIERE ET TECHNOLOGIE (SSMT)'),
                array('name' => 'BIOSCIENCES'),
                array('name' => 'STRM'),
                array('name' => 'CRIMINOLOGIE'),
                array('name' => 'SCIENCES JURIDIQUE ADMINISTRATIVE ET POLITIQUE (SJAP)'),
                array('name' => 'SCIENCES ECONOMIQUES ET DE GESTION (SEG)'),
                array('name' => 'SCIENCES DE LA NATURE (SN)'),
                array('name' => 'SCIENCES FONDAMENTALES APPLIQUEES'),
                array('name' => 'ECOLE PREPARATOIRE AUX SCIENCES DE LA SANTE (EPSS)'),
                array('name' => "SCIENCES DE GESTION DE L'ENVIRONNEMENT (SGE)"),
                array('name' => 'SCIENCES JURIDIQUE, ADMINISTRATIVE ET DE GESTION (SJAG)'),
                array('name' => 'COMMUNICATION, MILIEU ET SOCIETE (CMS)'),
                array('name' => 'SCIENCES ECONOMIQUES ET DEVELOPPEMENT (SED)'),
                array('name' => 'AGROFORESTERIE'),
                array('name' => 'ENVIRONNEMENT'),
                array('name' => 'SCIENCES JURIDIQUE ADMINISTRATIVE ET POLITIQUE'),
                array('name' => "SCIENCES DE L’HOMME ET DE LA SOCIETE"),
                array('name' => 'SCIENCES ECONOMIQUES ET DE GESTION'),
                array('name' => 'INSTITUT DE GESTION AGROPASTORALE'),
                array('name' => 'SCIENCES SOCIALES ET HUMAINES'),
                array('name' => 'SCIENCES BIOLOGIQUES'),
                array('name' => 'LETTRES ET ARTS'),
                array('name' => 'Réseaux et Sécurité Informatique (RSI)'),
                array('name' => 'Bases de Données (BD)'),
                array('name' => 'Développement d’Applications et e-Services (DAS)'),
                array('name' => 'Multimédia et Arts Numériques (MMX)'),
                //array('name' => ''),
                //array('name' => ''),
                //array('name' => 'Le Salon des artistes', 'id_auteur' => '7')
                )
            );

        DB::table('horaires')->insert(
            array(
                array('titre' => 'En journée'),
                array('titre' => 'Le matin'),
                array('titre' => "Le soir"),
                array('titre' => 'Le samedi'),
                array('titre' => 'Le dimanche'),
                )
            );

        DB::table('remunerations')->insert(
            array(
                array('type' => 'Intervention non rémunérées'),
                array('type' => 'Intervention rémunérées'),
                )
            );

        DB::table('modalites')->insert(
            array(
                array('type' => 'Présentiel'),
                array('type' => 'Distance'),
                )
            );

        DB::table('responsabilites')->insert(
            array(
                array('type' => 'Assistant'),
                array('type' => 'En charge'),
                )
            );
    }
}
