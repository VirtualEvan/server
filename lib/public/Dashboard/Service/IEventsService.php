<?php
declare(strict_types=1);


/**
 * Nextcloud - Dashboard App
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018, Maxence Lange <maxence@artificial-owl.com>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCP\Dashboard\Service;


use OCP\Dashboard\IDashboardManager;

/**
 * Interface IEventsService
 *
 * @since 15.0.0
 *
 * @package OCP\Dashboard\Service
 */
interface IEventsService {

	/**
	 * @see IDashboardManager::createUsersEvent
	 *
	 * @param string $widgetId
	 * @param array $users
	 * @param array $payload
	 * @param string $uniqueId
	 * @return mixed
	 */
	public function createUsersEvent(string $widgetId, array $users, array $payload, string $uniqueId);

	/**
	 * @see IDashboardManager::createGroupsEvent
	 *
	 * @param string $widgetId
	 * @param array $groups
	 * @param array $payload
	 * @param string $uniqueId
	 * @return mixed
	 */
	public function createGroupsEvent(string $widgetId, array $groups, array $payload, string $uniqueId);

	/**
	 * @see IDashboardManager::createGlobalEvent
	 *
	 * @param string $widgetId
	 * @param array $payload
	 * @param string $uniqueId
	 * @return mixed
	 */
	public function createGlobalEvent(string $widgetId, array $payload, string $uniqueId);

}
