<?php

namespace App\Models;

use CodeIgniter\Model;
 
class SurveyModel extends Model
{
    protected $table = 'gods_line_collaboration';
    protected $primaryKey = 'organization_or_individual_id';
    protected $allowedFields = [
        'organization_name', 'type_of_organization', 'other_type_of_organization', 'registration_number', 
        'country_of_registration', 'headquarters_address', 'city', 'state_or_province', 'postal_code', 'country', 'phone', 'website', 
        'primary_contact_person', 'title_or_position', 'email_primary_contact', 'phone_primary_contact', 'collaboration_interest', 
        'collaboration_interest_specify', 'collaboration_proposal', 'previous_experience', 'previous_experience_specify', 'expertise_to_offer', 
        'expertise_to_offer_specify', 'resource_for_collaboration', 'resource_for_collaboration_specify', 'collaboration_objective', 
        'collaboration_objective_specify', 'partnership_type', 'partnership_type_specify', 'collaboration_timeline', 'legal_and_regulatory_experience', 
        'ethical_and_environmental_standards', 'partnership_with_us', 'additional_information_for_proposal', 'authorized_sign', 'authorized_name', 
        'authorized_title', 'authorized_date', 'created_at'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}