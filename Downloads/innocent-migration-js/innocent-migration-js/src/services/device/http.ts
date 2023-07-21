import { HTTPClient } from '@/services/base/api';
import { AxiosResponse } from 'axios';
import { CategoryType } from 'model/Products';
import { DevicesType } from 'model/Devices';

export const FindDeviceByRoomType = (room: CategoryType): Promise<AxiosResponse> => {
  return HTTPClient.get('api/device', { params: { 'room-type': room } });
};

export const FindDevicesById = (): Promise<AxiosResponse> => {
  return HTTPClient.get('api/device');
};

export const UpdateDeviceStatus = (
  room: CategoryType,
  deviceId: number,
  data: Partial<DevicesType> = {}
): Promise<AxiosResponse> => {
  return HTTPClient.put(`api/device?room-type=${room}&id=${deviceId}`, data);
};
