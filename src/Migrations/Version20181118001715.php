<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181118001715 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person_group DROP FOREIGN KEY FK_C1F65B01FE54D947');
        $this->addSql('DROP TABLE `group`');
        $this->addSql('DROP TABLE person_group');
        $this->addSql('CREATE TABLE grouping (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person_grouping (person_id INT NOT NULL, grouping_id INT NOT NULL, INDEX IDX_9CBC222F217BBB47 (person_id), INDEX IDX_9CBC222F5DDE227E (grouping_id), PRIMARY KEY(person_id, grouping_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person_grouping ADD CONSTRAINT FK_9CBC222F217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_grouping ADD CONSTRAINT FK_9CBC222F5DDE227E FOREIGN KEY (grouping_id) REFERENCES grouping (id) ON DELETE CASCADE');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person_grouping DROP FOREIGN KEY FK_9CBC222F5DDE227E');
        $this->addSql('CREATE TABLE `group` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person_group (person_id INT NOT NULL, group_id INT NOT NULL, INDEX IDX_C1F65B01217BBB47 (person_id), INDEX IDX_C1F65B01FE54D947 (group_id), PRIMARY KEY(person_id, group_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person_group ADD CONSTRAINT FK_C1F65B01217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_group ADD CONSTRAINT FK_C1F65B01FE54D947 FOREIGN KEY (group_id) REFERENCES `group` (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE grouping');
        $this->addSql('DROP TABLE person_grouping');
    }
}
