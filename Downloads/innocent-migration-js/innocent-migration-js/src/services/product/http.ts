import { HTTPClient } from '@/services/base/api';
import { AxiosResponse } from 'axios';

export const GetProducts = (): Promise<AxiosResponse> => {
  return HTTPClient.get('api/product');
};
